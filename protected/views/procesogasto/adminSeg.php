<?php

$this->breadcrumbs = array(
	$model->label(2) => array('adminSeg'),
	Yii::t('app', 'Administrar'),
);


Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('procesogasto-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1><?php echo Yii::t('app', 'Administrar') . ' ' . GxHtml::encode($model->label(2)); ?></h1>


<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id' => 'procesogasto-grid',
	'dataProvider' => $model->search(),
	'pager' => array('cssFile' => Yii::app()->baseUrl . '/css/gridViewStyle/gridView.css'),
	'cssFile' => Yii::app()->baseUrl . '/css/gridViewStyle/gridView.css',
	'summaryText' => 'Resultados :{start} - {end} de {count} ',
	'filter' => $model,
	'columns' => array(
		'id',
		array(
				'name'=>'subitem_id',
				'value'=>'GxHtml::valueEx($data->subitem)',
				'filter'=>GxHtml::listDataEx(Subitem::model()->findAllAttributes(null, true)),
				),
		'tipo',
		'nombre',
		'estado',
		array(
			'class' => 'CButtonColumn',
			'template'=>'{view} {CS}',
			'buttons'=>array(
				'view' => array(
					'label'=>'Ver Proceso de Compra',
					'url'=>'Yii::app()->createUrl("procesogasto/viewSeg", array("id"=>$data->id))',
					
				),
				
				'CS' => array(
					'label'=>'CS',
					'url'=>'Yii::app()->createUrl("controlseguimiento/create", array("id"=>$data->id))',
					'imageUrl' => Yii::app()->request->baseUrl.'/images/new_cs.png',
				)
			),
			
		),
	),
)); ?>