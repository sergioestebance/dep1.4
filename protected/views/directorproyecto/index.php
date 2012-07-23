<?php

$this->breadcrumbs = array(
	Directorproyecto::label(2),
	Yii::t('app', 'Index'),
);

$this->menu = array(
	array('label'=>Yii::t('app', 'Crear') . ' ' . Directorproyecto::label(), 'url' => array('create')),
	array('label'=>Yii::t('app', 'Administrar') . ' ' . Directorproyecto::label(2), 'url' => array('admin')),
);
?>

<h1><?php echo GxHtml::encode(Directorproyecto::label(2)); ?></h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); 