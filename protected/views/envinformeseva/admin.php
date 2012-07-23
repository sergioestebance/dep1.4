<?php

$this->breadcrumbs = array(
	$model->label(2) => array('index'),
	Yii::t('app', 'Administar'),
);

$this->menu = array(
		array('label'=>Yii::t('app', 'Listar') . ' ' . $model->label(2), 'url'=>array('index')),
		array('label'=>Yii::t('app', 'Crear') . ' ' . $model->label(), 'url'=>array('create')),
	);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('envinformeseva-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1><?php echo Yii::t('app', 'Administrar') . ' ' . GxHtml::encode($model->label(2)); ?></h1>

<p>
Se pueden ocupar los operadores de comparacion (&lt;, &lt;=, &gt;, &gt;=, &lt;&gt; or =) al principio de cada valor de filtrado.
</p>

<?php echo GxHtml::link(Yii::t('app', 'Busqueda Avanzada'), '#', array('class' => 'search-button')); ?>
<div class="search-form">
<?php $this->renderPartial('_search', array(
	'model' => $model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id' => 'envinformeseva-grid',
	'dataProvider' => $model->search(),
	'filter' => $model,
	'columns' => array(
		'id',
		array(
				'name'=>'controlseguimiento_id',
				'value'=>'GxHtml::valueEx($data->controlseguimiento)',
				'filter'=>GxHtml::listDataEx(Controlseguimiento::model()->findAllAttributes(null, true)),
				),
		'fechaCreacion',
		'estado',
		'fecha1',
		'observacion1',
		/*
		'fecha2',
		'observacion2',
		*/
		array(
			'class' => 'CButtonColumn',
		),
	),
)); ?>