<?php

$this->breadcrumbs = array(
	$model->label(2) => array('index'),
	Yii::t('app', 'Administrar'),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('controlseguimiento-grid', {
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
	'id' => 'controlseguimiento-grid',
	'dataProvider' => $model->search(),
	'filter' => $model,
	'columns' => array(
		'id',
		array(
				'name'=>'procesocompra_id',
				'value'=>'GxHtml::valueEx($data->procesocompra)',
				'filter'=>GxHtml::listDataEx(Procesocompra::model()->findAllAttributes(null, true)),
				),
		'tipo',
		array(
			'class' => 'CButtonColumn',
			'template'=>'{view} {plantilla}',
			'buttons'=>array(
				'view' => array(
					'label'=>'Ver Control de Seguimiento',
					'url'=>'Yii::app()->createUrl("controlseguimiento/viewRendicion", array("id"=>$data->id))',
					
				),
				
				'plantilla' => array(
					'label'=>'Nueva Plantilla',
					'url'=>'Yii::app()->createUrl("plantilla/crearRendicion", array("id"=>$data->id))',
					'imageUrl' => Yii::app()->request->baseUrl.'/images/new_cs.png',
				)
			),
			
		),
	),
)); ?>


