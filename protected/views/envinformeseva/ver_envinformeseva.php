<script type="text/javascript">
function editEnvinformeseva()
{
    <?php echo CHtml::ajax(array(
            'url'=>Yii::app()->createUrl("envinformeseva/editar", array("id"=>$model->id)),
            'data'=> "js:$(this).serialize()",
            'type'=>'post',
            'dataType'=>'json',
            'success'=>"function(data)
            {
                if (data.status == 'failure')
                {
                    $('#div_envinformeseva').html(data.div);
					$('#div_envinformeseva').show();
                    $('#div_envinformeseva form').submit(editEnvinformeseva);
                }
                else
                {
                    $('#div_envinformeseva').html(data.div);
					$('#div_envinformeseva').hide('slow');
				location.reload();	
		        }
			
			
            } ",
            ))?>;
    return false;  
} 

</script>

<?php $this->widget('zii.widgets.CDetailView', array(
	'id'=> 'detalle-envinformeseva',
	'data' => $model,
	'attributes' => array(
	'fechaCreacion',
	'fecha1',
	'observacion1',
	'fecha2',
	'observacion2',
	
	),
)); 


?>

<br>
<?php 
$this->widget('zii.widgets.jui.CJuiButton',
	array(
		'name'=>'button-envinformeseva',
		'value'=>'ACTUALIZAR',
		'caption'=>'ACTUALIZAR',
		'onclick'=>'js: function(e){e.preventDefault();editEnvinformeseva()}',
		)
);
?>

<br><br>
<div id="div_envinformeseva" class="box"> 
</div>
<br>

