<?php

$this->breadcrumbs = array(
	Aj::label(2),
	Yii::t('app', 'Index'),
);

$this->menu = array(
	array('label'=>Yii::t('app', 'Create') . ' ' . Aj::label(), 'url' => array('create')),
	array('label'=>Yii::t('app', 'Manage') . ' ' . Aj::label(2), 'url' => array('admin')),
);
?>

<h1><?php echo GxHtml::encode(Aj::label(2)); ?></h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); 