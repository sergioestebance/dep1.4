<?php

$this->breadcrumbs = array(
	$model->label(2) => array('index'),
	Yii::t('app', 'Administrar'),
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
	$.fn.yiiGridView.update('subitem-grid', {
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
	'id' => 'subitem-grid',
	'dataProvider' => $model->search(),
	'pager' => array('cssFile' => Yii::app()->baseUrl . '/css/gridViewStyle/gridView.css'),
	'cssFile' => Yii::app()->baseUrl . '/css/gridViewStyle/gridView.css',
	'summaryText' => 'Resultados :{start} - {end} de {count} ',
	'filter' => $model,
	'columns' => array(
		'id',
		array(
				'name'=>'proyecto_id',
				'value'=>'GxHtml::valueEx($data->proyecto)',
				'filter'=>GxHtml::listDataEx(Proyecto::model()->findAllAttributes(null, true)),
				),
		array(
				'name'=>'tipoaporte_id',
				'value'=>'GxHtml::valueEx($data->tipoaporte)',
				'filter'=>GxHtml::listDataEx(Tipoaporte::model()->findAllAttributes(null, true)),
				),
		array(
				'name'=>'item_id',
				'value'=>'GxHtml::valueEx($data->item)',
				'filter'=>GxHtml::listDataEx(Item::model()->findAllAttributes(null, true)),
				),
		array(
				'name'=>'centrocosto_id',
				'value'=>'GxHtml::valueEx($data->centrocosto)',
				'filter'=>GxHtml::listDataEx(Centrocosto::model()->findAllAttributes(null, true)),
				),
		'codigo',
		/*
		'descripcion',
		'cantidad',
		'costoUnitario',
		'montos',
		'correlativo',
		*/
		array(
			'class' => 'CButtonColumn',
		),
	),
)); ?>