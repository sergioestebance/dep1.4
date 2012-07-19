<script type="text/javascript">
function addSolicitud()
{
    <?php echo CHtml::ajax(array(
            'url'=>Yii::app()->createUrl("solicitudcompra/crear", array("id"=>$model_pc->id)),
            'data'=> "js:$(this).serialize()",
            'type'=>'post',
            'dataType'=>'json',
            'success'=>"function(data)
            {
                if (data.status == 'failure')
                {
                    $('#div_solicitudcompra').html(data.div);
					$('#div_solicitudcompra').show();
                    $('#div_solicitudcompra form').submit(addSolicitud);
                }
                else
                {
                    $('#div_solicitudcompra').html(data.div);
					$('#div_solicitudcompra').hide('slow');
					$.fn.yiiGridView.update('solicitudes-grid');
		        }
			
            } ",
            ))?>;
    return false; 
 
}
 
</script>
<?php 
$this->widget('zii.widgets.grid.CGridView', array(
	'id' => 'solicitudes-grid',
	'dataProvider' => new CArrayDataProvider($model_pc->solicitudcompras,array()),
	'columns' => array(
		'numSolicitud',
		'fecha',
		'descripcion',
		'monto',
		array(
			'class' => 'CButtonColumn',
			'template'=>'{view} {update}',
			'buttons'=>array(
				'view' => array(
					'label'=>'Ver etapa proceso de compra',
					'url'=>'Yii::app()->createUrl("solicitudcompra/view", array("id"=>$data->id))',
				),
				'update' => array(
					'label'=>'editar etapa  proceso de compra',
					'url'=>'Yii::app()->createUrl("solicitudcompra/update", array("id"=>$data->id))',
				),
			),
		),
	),
)); 
?>
<br>
<?php echo CHtml::link('AGREGAR', "",array('style'=>'cursor: pointer; text-decoration: underline;', 'onclick'=>"js:addSolicitud();"));
?>
<br><br>
<div id="div_solicitudcompra" class="box"> 

</div>

<br>
