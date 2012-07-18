<?php

$this->breadcrumbs = array(
	$model_peticionet->label(2) => array('index'),
	Yii::t('app', 'Crear'),
);

$this->menu = array(
	array('label'=>Yii::t('app', 'Listar') . ' ' . $model_peticionet->label(2), 'url' => array('index')),
	array('label'=>Yii::t('app', 'Administrar') . ' ' . $model_peticionet->label(2), 'url' => array('admin')),
);
?>

<h1><?php echo Yii::t('app', 'Crear') . ' ' . GxHtml::encode($model_peticionet->label()); ?></h1>


<?php
$this->renderPartial('_form', array(
		'model' => $model_peticionet,
		'model_pc' => $model_pc,
		'buttons' => 'create'));
?>