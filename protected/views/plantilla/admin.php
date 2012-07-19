<?php

$this->breadcrumbs = array(
	$model->label(2) => array('index'),
	Yii::t('app', 'Manage'),
);

$this->menu = array(
		array('label'=>Yii::t('app', 'List') . ' ' . $model->label(2), 'url'=>array('index')),
		array('label'=>Yii::t('app', 'Create') . ' ' . $model->label(), 'url'=>array('create')),
	);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('plantilla-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1><?php echo Yii::t('app', 'Manage') . ' ' . GxHtml::encode($model->label(2)); ?></h1>

<p>
You may optionally enter a comparison operator (&lt;, &lt;=, &gt;, &gt;=, &lt;&gt; or =) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo GxHtml::link(Yii::t('app', 'Advanced Search'), '#', array('class' => 'search-button')); ?>
<div class="search-form">
<?php $this->renderPartial('_search', array(
	'model' => $model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id' => 'plantilla-grid',
	'dataProvider' => $model->search(),
	'filter' => $model,
	'columns' => array(
		'id',
		array(
				'name'=>'procesogasto_id',
				'value'=>'GxHtml::valueEx($data->procesogasto)',
				'filter'=>GxHtml::listDataEx(Procesogasto::model()->findAllAttributes(null, true)),
				),
		array(
				'name'=>'proyecto_id',
				'value'=>'GxHtml::valueEx($data->proyecto)',
				'filter'=>GxHtml::listDataEx(Proyecto::model()->findAllAttributes(null, true)),
				),
		'item',
		'numDocumentoSC',
		'fechaSC',
		/*
		'numDocumentoOC',
		'fechaOC',
		'tipoDocumentoDP',
		'numDocumentoDP',
		'fechaDP',
		'numComprobanteEI',
		'fechaEI',
		'numOrdenPagoEI',
		'tipoDocumentoFB',
		'numDocumentoFB',
		'rutProveedorFB',
		'fechaFB',
		'fechaCancelacionFB',
		'detalleDocumentoFB',
		'valorCanceladoFB',
		'observacion1FB',
		'procesosFB',
		*/
		array(
			'class' => 'CButtonColumn',
		),
	),
)); ?>