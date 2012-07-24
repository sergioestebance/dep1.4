<script type="text/javascript">
function editAJ()
{
    <?php echo CHtml::ajax(array(
            'url'=>Yii::app()->createUrl("aj/editar", array("id"=>$model->et->id)),
            'data'=> "js:$(this).serialize()",
            'type'=>'post',
            'dataType'=>'json',
            'success'=>"function(data)
            {
                if (data.status == 'failure')
                {
                    $('#div_aj').html(data.div);
					$('#div_aj').show();
                    $('#div_aj form').submit(editET);
                }
                else
                {
                    $('#div_aj').html(data.div);
					$('#div_aj').hide('slow');
				location.reload();	
		        }
			
			
            } ",
            ))?>;
    return false; 
 
}
 
</script>
<?php 
	$this->widget('zii.widgets.CDetailView', array(
	'id'=> 'detalle-aj',
	'data' => $model_pcs->ajs,
	'attributes' => array(
	'tipo',
	'fechaCreacion',
	'fechaRespuesta',
	'estado',
	
	),
)); 


?>

<br>
<?php echo CHtml::link('ACTUALIZAR', "",array('style'=>'cursor: pointer; text-decoration: underline;', 'onclick'=>"js: editAJ();"));
?>
<br><br>
<div id="div_aj" class="box"> 
</div>
<br>

