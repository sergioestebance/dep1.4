<script type="text/javascript">
function addConstancia()
{
    <?php echo CHtml::ajax(array(
            'url'=>Yii::app()->createUrl("constancia/crear", array("id"=>$model_pc->id)),
            'data'=> "js:$(this).serialize()",
            'type'=>'post',
            'dataType'=>'json',
            'success'=>"function(data)
            {
                if (data.status == 'failure')
                {
                    $('#div_constancia').html(data.div);
					$('#div_constancia').show();
                    $('#div_constancia form').submit(addConstancia);
                }
                else
                {
                    $('#div_constancia').html(data.div);
					$('#div_constancia').hide('slow');
					$.fn.yiiGridView.update('constancia-grid');
		        }
 
            } ",
            ))?>;
    return false; 
 
}
 
</script>

<?php 
$this->widget('zii.widgets.grid.CGridView', array(
	'id' => 'constancia-grid',
	'dataProvider' => new CArrayDataProvider($model_pc->constancias,array()),
	'columns' => array(
		'mes',
		'item',
		'detalleDocumento',
		'valor',
		array(
			'class' => 'CButtonColumn',
			'template'=>'{view} {update}',
			'buttons'=>array(
				'view' => array(
					'label'=>'Ver etapa proceso de gasto',
					'url'=>'Yii::app()->createUrl("constancia/view", array("id"=>$data->id))',
				),
				'update' => array(
					'label'=>'editar etapa  proceso de compra',
					'url'=>'Yii::app()->createUrl("constancia/update", array("id"=>$data->id))',
				),
			),
		),
	),
)); 
?>
<br>
<?php echo CHtml::link('AGREGAR', "",array('style'=>'cursor: pointer; text-decoration: underline;', 'onclick'=>"js:addConstancia();"));
?>
<br><br>
<div id="div_constancia" class="box"> 
</div>

<br>

