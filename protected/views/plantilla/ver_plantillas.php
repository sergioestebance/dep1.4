<script type="text/javascript">
function addPlantilla()
{
    <?php echo CHtml::ajax(array(
            'url'=>Yii::app()->createUrl("plantilla/crear", array("id"=>$model_pc->id)),
            'data'=> "js:$(this).serialize()",
            'type'=>'post',
            'dataType'=>'json',
            'success'=>"function(data)
            {
                if (data.status == 'failure')
                {
                    $('#div_plantilla').html(data.div);
					$('#div_plantilla').show();
                    $('#div_plantilla form').submit(addPlantilla);
                }
                else
                {
                    $('#div_plantilla').html(data.div);
					$('#div_plantilla').hide('slow');
					$.fn.yiiGridView.update('plantilla-grid');
		        }
 
            } ",
            ))?>;
    return false; 
 
}
 
</script>

<?php 
$this->widget('zii.widgets.grid.CGridView', array(
	'id' => 'plantilla-grid',
	'dataProvider' => new CArrayDataProvider($model_pc->plantillas,array()),
	'columns' => array(
		'tipoDocumento',
		'numDocumento',
		'rutProveedor',
		/*'tipoDocumentoDP',
		'numDocumentoDP',
		'fechaDP',
		'numComprobanteEI',
		'fechaEI',
		'numOrdenPagoEI',
		'tipoDocumentoFB',
		'numDocumentoFB',
		'rutProveedorFB',
		'fechaFB',
		'fechaCancelacionFB',
		'detalleDocumentoFB',
		'valorCanceladoFB',
		'observacion1FB',
		'procesosFB',*/
		
		array(
			'class' => 'CButtonColumn',
			'template'=>'{view} {update}',
			'buttons'=>array(
				'view' => array(
					'label'=>'Ver etapa proceso de gasto',
					'url'=>'Yii::app()->createUrl("plantilla/view", array("id"=>$data->id))',
				),
				'update' => array(
					'label'=>'editar etapa  proceso de compra',
					'url'=>'Yii::app()->createUrl("plantilla/update", array("id"=>$data->id))',
				),
			),
		),
	),
)); 
?>
<br>
<?php echo CHtml::link('AGREGAR', "",array('style'=>'cursor: pointer; text-decoration: underline;', 'onclick'=>"js:addPlantilla();"));
?>
<br><br>
<div id="div_plantilla" class="box"> 
</div>

<br>

