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

<h1><?php echo Yii::t('app', 'View') . ' ' . GxHtml::encode($model->label()) . ' ' . GxHtml::encode(GxHtml::valueEx($model)); ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data' => $model,
	'attributes' => array(
'id',
array(
			'name' => 'procesogasto',
			'type' => 'raw',
			'value' => $model->procesogasto !== null ? GxHtml::link(GxHtml::encode(GxHtml::valueEx($model->procesogasto)), array('procesogasto/view', 'id' => GxActiveRecord::extractPkValue($model->procesogasto, true))) : null,
			),
array(
			'name' => 'controlseguimiento',
			'type' => 'raw',
			'value' => $model->controlseguimiento !== null ? GxHtml::link(GxHtml::encode(GxHtml::valueEx($model->controlseguimiento)), array('controlseguimiento/view', 'id' => GxActiveRecord::extractPkValue($model->controlseguimiento, true))) : null,
			),
array(
			'name' => 'proyecto',
			'type' => 'raw',
			'value' => $model->proyecto !== null ? GxHtml::link(GxHtml::encode(GxHtml::valueEx($model->proyecto)), array('proyecto/view', 'id' => GxActiveRecord::extractPkValue($model->proyecto, true))) : null,
			),
array(
			'name' => 'item',
			'type' => 'raw',
			'value' => $model->item !== null ? GxHtml::link(GxHtml::encode(GxHtml::valueEx($model->item)), array('item/view', 'id' => GxActiveRecord::extractPkValue($model->item, true))) : null,
			),
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
)); ?>

