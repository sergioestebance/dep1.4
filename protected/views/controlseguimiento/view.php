

<?php
$this->breadcrumbs = array(
	$model->label(2) => array('index'),
	GxHtml::valueEx($model),
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

<br>

<?php
  $this->renderPartial('tab'.$model->tipo, array('model' => $model,));
?>