<?php

$this->breadcrumbs = array(
	$model->label(2) => array('index'),
	GxHtml::valueEx($model),
);

$this->menu=array(
	array('label'=>Yii::t('app', 'Listar') . ' ' . $model->label(2), 'url'=>array('index')),
	array('label'=>Yii::t('app', 'Crear') . ' ' . $model->label(), 'url'=>array('create')),
	array('label'=>Yii::t('app', 'Actualizar') . ' ' . $model->label(), 'url'=>array('update', 'id' => $model->id)),
	array('label'=>Yii::t('app', 'Eliminar') . ' ' . $model->label(), 'url'=>'#', 'linkOptions' => array('submit' => array('delete', 'id' => $model->id), 'confirm'=>'Seguro desea borrar esta item?')),
	array('label'=>Yii::t('app', 'Administrar') . ' ' . $model->label(2), 'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('app', 'Ver') . ' ' . GxHtml::encode($model->label()) . ' ' . GxHtml::encode(GxHtml::valueEx($model)); ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data' => $model,
	'attributes' => array(
'id',
array(
			'name' => 'proyecto',
			'type' => 'raw',
			'value' => $model->proyecto !== null ? GxHtml::link(GxHtml::encode(GxHtml::valueEx($model->proyecto)), array('proyecto/view', 'id' => GxActiveRecord::extractPkValue($model->proyecto, true))) : null,
			),
array(
			'name' => 'tipoaporte',
			'type' => 'raw',
			'value' => $model->tipoaporte !== null ? GxHtml::link(GxHtml::encode(GxHtml::valueEx($model->tipoaporte)), array('tipoaporte/view', 'id' => GxActiveRecord::extractPkValue($model->tipoaporte, true))) : null,
			),
array(
			'name' => 'item',
			'type' => 'raw',
			'value' => $model->item !== null ? GxHtml::link(GxHtml::encode(GxHtml::valueEx($model->item)), array('item/view', 'id' => GxActiveRecord::extractPkValue($model->item, true))) : null,
			),
array(
			'name' => 'centrocosto',
			'type' => 'raw',
			'value' => $model->centrocosto !== null ? GxHtml::link(GxHtml::encode(GxHtml::valueEx($model->centrocosto)), array('centrocosto/view', 'id' => GxActiveRecord::extractPkValue($model->centrocosto, true))) : null,
			),
'codigo',
'descripcion',
'cantidad',
'costoUnitario',
'montos',
'correlativo',
'saldo',
	),
)); ?>
<br><br>
