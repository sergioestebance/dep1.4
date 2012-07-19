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
	$.fn.yiiGridView.update('procesocompra-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1><?php echo Yii::t('app', 'Administrar') . ' ' . GxHtml::encode($model->label(2)); ?></h1>


<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id' => 'procesocompra-grid',
	'dataProvider' => $model->search(),
	'pager' => array('cssFile' => Yii::app()->baseUrl . '/css/gridViewStyle/gridView.css'),
	//'cssFile' => Yii::app()->baseUrl . '/css/gridViewStyle/gridView.css',
	'summaryText' => 'Resultados :{start} - {end} de {count} ',
	'filter' => $model,
	'columns' => array(
		'id',
		array(
				'name'=>'subitem_id',
				'value'=>'GxHtml::valueEx($data->subitem)',
				'filter'=>GxHtml::listDataEx(Subitem::model()->findAllAttributes(null, true)),
				),
		'nombre',
		'sigla',
		'caracteristicas',
		'estado',
		/*
		'fechaBL',
		'idBL',
		'fechaTD',
		'numeroidTD',
		'observacionTD',
		*/
	array(
			'class' => 'CButtonColumn',
			'template'=>'{view} {CS}',
			'buttons'=>array(
				'view' => array(
					'label'=>'Ver Proceso de Compra',
					'url'=>'Yii::app()->createUrl("procesocompra/viewSeg", array("id"=>$data->id))',
				),
				'CS' => array(
					'label'=>'Crear Control Seguimiento',
					'url'=>'Yii::app()->createUrl("controlseguimiento/creaCS", array("id"=>$data->id))',
					'imageUrl' => Yii::app()->request->baseUrl.'/images/new_cs.png',
					'options' => array(
						'onclick'=>"js:$('#dialog_cs').dialog('open')",
						'ajax'=>array(
							'url'=>"js:$(this).attr('href')",
							'data'=> "js:$(this).serialize()",
							'type'=>'post',
							'dataType'=>'json',
							'success'=>"function(data){							
									$('#dialog_cs').html(data._form);
							}",
							),
						),

				)
			),
				
	),
	),
)); 
?>


<?php $this->beginWidget('zii.widgets.jui.CJuiDialog', array(
        'id' => 'dialog_cs',
        'options' => array(
            'title' => 'Control de Seguimiento',
            'autoOpen' => false,
			'width'=> 450,
			'height'=> 350,

			//'buttons'=>array(
                //'Aceptar'=>'js:function(){ $(this).dialog("close")}',
				//),
			),
		)); ?>
		<div id="divForForm"></div>
		<?php $this->endWidget() ?>