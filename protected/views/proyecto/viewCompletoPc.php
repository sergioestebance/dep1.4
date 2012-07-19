<?php

$this->breadcrumbs = array(
	$model->label(2) => array('admin'),
	GxHtml::valueEx($model),
);

?>

<h1><?php echo Yii::t('app', 'Ver') . ' ' . GxHtml::encode($model->label()) . ' ' . GxHtml::encode(GxHtml::valueEx($model)); ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data' => $model,
	'attributes' => array(
'id',
'codigoProyecto',
'nombre',
'codigoBip',
'duracion',
'director',
'aporteFic',
'aporteUtaV',
'aporteUtaP',
'aporteUtaTotal',
'aportesOtros',
'montoProyecto',
'aporteFicAnt',
'porcAporteFic',
'porcAporteVal',
'porcAportePec',
'porcAporteExt',
	),
)); ?>

