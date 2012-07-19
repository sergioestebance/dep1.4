<?php

$this->breadcrumbs = array(
	$model->label(2) => array('admin'),
	Yii::t('app', 'Crear'),
);

$this->menu = array(
	array('label'=>Yii::t('app', 'Crear') . ' ' . Adquisicion::label(), 'url' => array('create')),
	array('label'=>Yii::t('app', 'Administrar') . ' ' . Adquisicion::label(2), 'url' => array('admin')),
);
?>

<h1><?php echo Yii::t('app', 'Crear') . ' ' . GxHtml::encode($model->label()); ?></h1>

<?php
$this->renderPartial('_form', array(
		'model' => $model,
		'buttons' => 'create'));
?>