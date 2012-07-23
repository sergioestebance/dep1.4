<?php

$this->breadcrumbs = array(
	Proyecto::label(2),
	Yii::t('app', 'Index'),
);

$this->menu = array(
	array('label'=>Yii::t('app', 'Create') . ' ' . Proyecto::label(), 'url' => array('create')),
	array('label'=>Yii::t('app', 'Manage') . ' ' . Proyecto::label(2), 'url' => array('admin')),
);
?>

<h1><?php echo GxHtml::encode(Proyecto::label(2)); ?></h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); 