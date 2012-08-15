<?php

$this->breadcrumbs = array(
	$model->label(2) => array('index'),
	GxHtml::valueEx($model),
);

$this->menu=array(
	array('label'=>Yii::t('app', 'List') . ' ' . $model->label(2), 'url'=>array('index')),
	array('label'=>Yii::t('app', 'Create') . ' ' . $model->label(), 'url'=>array('create')),
	array('label'=>Yii::t('app', 'Update') . ' ' . $model->label(), 'url'=>array('update', 'id' => $model->id)),
	array('label'=>Yii::t('app', 'Delete') . ' ' . $model->label(), 'url'=>'#', 'linkOptions' => array('submit' => array('delete', 'id' => $model->id), 'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>Yii::t('app', 'Manage') . ' ' . $model->label(2), 'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('app', 'Ver') . ' ' . GxHtml::encode($model->label()) . ' ' . GxHtml::encode(GxHtml::valueEx($model)); ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data' => $model,
	'attributes' => array(
'id',
array(
			'name' => 'procesocompra',
			'type' => 'raw',
			'value' => $model->procesocompra !== null ? GxHtml::link(GxHtml::encode(GxHtml::valueEx($model->procesocompra)), array('procesocompra/view', 'id' => GxActiveRecord::extractPkValue($model->procesocompra, true))) : null,
			),
'tipo',
'estado',
	),
)); ?>


</br><h2><?php echo 'Datos Plantilla';  ?></h2>
<?php 
if($plantilla){

$this->widget('zii.widgets.CDetailView', array(
	'data' => $plantilla,
	'attributes' => array(
'id',

array(
			'name' => 'controlseguimiento',
			'type' => 'raw',
			'value' => $plantilla->controlseguimiento !== null ? GxHtml::link(GxHtml::encode(GxHtml::valueEx($plantilla->controlseguimiento)), array('controlseguimiento/viewRendicion', 'id' => GxActiveRecord::extractPkValue($plantilla->controlseguimiento, true))) : null,
			),
array(
			'name' => 'proyecto',
			'type' => 'raw',
			'value' => $plantilla->proyecto !== null ? GxHtml::link(GxHtml::encode(GxHtml::valueEx($plantilla->proyecto)), array('proyecto/view', 'id' => GxActiveRecord::extractPkValue($plantilla->proyecto, true))) : null,
			),
array(
			'name' => 'item',
			'type' => 'raw',
			'value' => $plantilla->item !== null ? GxHtml::link(GxHtml::encode(GxHtml::valueEx($plantilla->item)), array('item/view', 'id' => GxActiveRecord::extractPkValue($plantilla->item, true))) : null,
			),
'agno',
'mes',
'tipoDocumento',
'numDocumento',
'numComprobanteEI',
'fechaEI',
'tipoDocumentoFB',
'numDocumentoFB',
'rutProveedor',
'fechaEmisionDoc',
'fechaCancelacionDoc',
'detalleDoc',
'valorTotal',
'observacion',
	),
));
}else{
echo "<p>PLANTILLA NO CREADA</p>";

} ?>
