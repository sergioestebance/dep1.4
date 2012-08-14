<script type="text/javascript">
function editRESOLUCIONOF()
{
    <?php echo CHtml::ajax(array(
            'url'=>Yii::app()->createUrl("resolucionof/editar", array("id"=>$model->id)),
            'data'=> "js:$(this).serialize()",
            'type'=>'post',
            'dataType'=>'json',
            'success'=>"function(data)
            {
                if (data.status == 'failure')
                {
                    $('#div_resolucionof').html(data.div);
					$('#div_resolucionof').show();
                    $('#div_resolucionof form').submit(editRESOLUCIONOF);
                }
                else
                {
                    $('#div_resolucionof').html(data.div);
					$('#div_resolucionof').hide('slow');
				location.reload();	
		        }
			
			
            } ",
            ))?>;
    return false;  
} 

</script>

<?php $this->widget('zii.widgets.CDetailView', array(
	'id'=> 'detalle-resolucionof',
	'data' => $model,
	'attributes' => array(
	'tipo',
	'numResolucionFirmada',
	'fechaCreacion',
	'fechaEntregaRes',
	'observacion',
	
	),
)); 


?>

<br>
<?php 
$this->widget('zii.widgets.jui.CJuiButton',
	array(
		'name'=>'button-resolucionof',
		'value'=>'ACTUALIZAR',
		'caption'=>'ACTUALIZAR',
		'onclick'=>'js: function(e){e.preventDefault();editRESOLUCIONOF()}',
		)
);
?>

<br><br>
<div id="div_resolucionof" class="box"> 
</div>
<br>

