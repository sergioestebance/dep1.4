<script type="text/javascript">
function editROFICIALIZADA()
{
    <?php echo CHtml::ajax(array(
            'url'=>Yii::app()->createUrl("resolucionoficializada/editar", array("id"=>$model->id)),
            'data'=> "js:$(this).serialize()",
            'type'=>'post',
            'dataType'=>'json',
            'success'=>"function(data)
            {
                if (data.status == 'failure')
                {
                    $('#div_resolucionoficializada').html(data.div);
					$('#div_resolucionoficializada').show();
                    $('#div_resolucionoficializada form').submit(editROFICIALIZADA);
                }
                else
                {
                    $('#div_resolucionoficializada').html(data.div);
					$('#div_resolucionoficializada').hide('slow');
				location.reload();	
		        }
			
			
            } ",
            ))?>;
    return false;  
} 

</script>

<?php $this->widget('zii.widgets.CDetailView', array(
	'id'=> 'detalle-resolucionoficializada',
	'data' => $model,
	'attributes' => array(
	'fechaEnvioRes',
	'observacion',
	
	),
)); 


?>

<br>
<?php 
$this->widget('zii.widgets.jui.CJuiButton',
	array(
		'name'=>'button-resolucionoficializada',
		'value'=>'ACTUALIZAR',
		'caption'=>'ACTUALIZAR',
		'onclick'=>'js: function(e){e.preventDefault();editROFICIALIZADA()}',
		)
);
?>

<br><br>
<div id="div_resolucionoficializada" class="box"> 
</div>
<br>

