


<?php
$this->breadcrumbs = array(
	'Subitem' => array('subitem/viewpc', 'id'=>$model->subitem_id),
	GxHtml::valueEx($model),
);

?>

<h1><?php echo Yii::t('app', 'Ver') . ' ' . GxHtml::encode($model->label()) . ' ' . GxHtml::encode(GxHtml::valueEx($model)); ?></h1>



<?php $this->widget('zii.widgets.CDetailView', array(
	'data' => $model,
	'attributes' => array(
	'id',
	array(
			'name' => 'subitem',
			'type' => 'raw',
			'value' => $model->subitem !== null ? GxHtml::link(GxHtml::encode(GxHtml::valueEx($model->subitem)), array('subitem/view', 'id' => GxActiveRecord::extractPkValue($model->subitem, true))) : null,
			),
	'nombre',
	'sigla',
	'caracteristicas',
	'estado',

	),
)); ?>
<br><br>

<?php
  $this->renderPartial('tab'.$model->tipo, array('model' => $model,));
?>

<?php
  $this->renderPartial('botones'.$model->estado, array('model' => $model,));
?>


