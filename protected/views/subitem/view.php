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
	),
)); ?>

<h2><?php echo GxHtml::encode($model->getRelationLabel('procesocompras')); ?></h2>
<?php
	echo GxHtml::openTag('ul');
	foreach($model->procesocompras as $relatedModel) {
		echo GxHtml::openTag('li');
		echo GxHtml::link(GxHtml::encode(GxHtml::valueEx($relatedModel)), array('procesocompra/view', 'id' => GxActiveRecord::extractPkValue($relatedModel, true)));
		echo GxHtml::closeTag('li');
	}
	echo GxHtml::closeTag('ul');
?><h2><?php echo GxHtml::encode($model->getRelationLabel('procesogastos')); ?></h2>
<?php
	echo GxHtml::openTag('ul');
	foreach($model->procesogastos as $relatedModel) {
		echo GxHtml::openTag('li');
		echo GxHtml::link(GxHtml::encode(GxHtml::valueEx($relatedModel)), array('procesogasto/view', 'id' => GxActiveRecord::extractPkValue($relatedModel, true)));
		echo GxHtml::closeTag('li');
	}
	echo GxHtml::closeTag('ul');
?>