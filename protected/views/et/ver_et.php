<script type="text/javascript">
function editET()
{
    <?php echo CHtml::ajax(array(
            'url'=>Yii::app()->createUrl("et/editar", array("id"=>$model->et->id)),
            'data'=> "js:$(this).serialize()",
            'type'=>'post',
            'dataType'=>'json',
            'success'=>"function(data)
            {
                if (data.status == 'failure')
                {
                    $('#div_et').html(data.div);
					$('#div_et').show();
                    $('#div_et form').submit(editET);
                }
                else
                {
                    $('#div_et').html(data.div);
					$('#div_et').hide('slow');
				location.reload();	
		        }
			
			
            } ",
            ))?>;
    return false; 
 
}
 
</script>
<?php 
	$this->widget('zii.widgets.CDetailView', array(
	'id'=> 'detalle-et',
	'data' => $model->et,
	'attributes' => array(
'id',
	array(
			'name' => 'subitem',
			'type' => 'raw',
			'value' => $model->subitem !== null ? GxHtml::link(GxHtml::encode(GxHtml::valueEx($model->subitem)), array('subitem/view', 'id' => GxActiveRecord::extractPkValue($model->subitem, true))) : null,
			),
'forma',
'fecha',
'estado',
	),
)); 


?>

<br>
<?php echo CHtml::link('ACTUALIZAR', "",array('style'=>'cursor: pointer; text-decoration: underline;', 'onclick'=>"js: editET();"));
?>
<br><br>
<div id="div_et" class="box"> 
</div>
<br>
