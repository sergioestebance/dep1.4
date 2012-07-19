<?php

$this->breadcrumbs = array(
	$model->label(2) => array('adminProyectoPc'),
	GxHtml::valueEx($model),
);


$this->menu=array(
	array('label'=>Yii::t('app', 'Ver Proyecto Completo'), 'url'=>array('viewcompletopc', 'id' => $model->id)),
);
?>

<h1><?php echo Yii::t('app', 'Ver') . ' ' . GxHtml::encode($model->label()) . ' ' . GxHtml::encode(GxHtml::valueEx($model)); ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data' => $model,
	'attributes' => array(
'id',
'codigoProyecto',
'nombre',
'codigoBip',
'duracion',
'director',
	),
)); ?>

<h2><?php echo GxHtml::encode($model->getRelationLabel('subitems')); ?></h2>

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id' => 'subitem-grid',
	'dataProvider' => new CArrayDataProvider($model->subitems,array('pagination' => array('pageSize'=>100),)),
	'pager' => array('cssFile' => Yii::app()->baseUrl . '/css/gridViewStyle/gridView.css'),
	'cssFile' => Yii::app()->baseUrl . '/css/gridViewStyle/gridView.css',
	'summaryText' => 'Resultados :{start} - {end} de {count} ',
	'columns' => array(
	//array('header'=>'ID','name'=>'correlativo',),
		//'codigo',
		'correlativo',
		array('header'=>'Item','name'=>'item',),
		array('header'=>'CC Nuevo','name'=>'centrocosto.nuevo',),
		array('header'=>'CC Anterior','name'=>'centrocosto.anterior',),
		array('header'=>'Tipo aporte','name'=>'tipoaporte',),
		'descripcion',
		'cantidad',
		'costoUnitario',
		'montos',
		array(
			'class'=>'CButtonColumn',
			'template'=>'{view} {crearpc} {crearpg}',
			'buttons'=>array
			(			
			'view' => array('label' => 'ver subitem','url'=>'Yii::app()->createUrl("subitem/viewp", array("id"=>$data->id))',),
			'crearpc' => array(
					'label'=>'Nuevo Proceso de Compra',
					'url'=>'Yii::app()->createUrl("procesocompra/creaPC", array("id"=>$data->id))',
					'imageUrl' => Yii::app()->request->baseUrl.'/images/new_pc.png',
					'options' => array(
						'onclick'=>"js:$('#dialog_eett').dialog('open')",
						'ajax'=>array(
							'url'=>"js:$(this).attr('href')",
							'data'=> "js:$(this).serialize()",
							'type'=>'post',
							'dataType'=>'json',
							'success'=>"function(data){							
									$('#dialog_eett').html(data._form);
							}",
							),
						),
				),
			'crearpg' => array(
					'label'=>'Nuevo Proceso de Gasto',
					'url'=>'Yii::app()->createUrl("procesogasto/creaPG", array("id"=>$data->id))',
					'imageUrl' => Yii::app()->request->baseUrl.'/images/new_pg.png',
					'options' => array(
						'onclick'=>"js:$('#dialog_eett').dialog('open')",
						'ajax'=>array(
							'url'=>"js:$(this).attr('href')",
							'data'=> "js:$(this).serialize()",
							'type'=>'post',
							'dataType'=>'json',
							'success'=>"function(data){							
									$('#dialog_eett').html(data._form);
							}",
							),
						),
				),				
				),
			),
	),
)); ?>


<?php $this->beginWidget('zii.widgets.jui.CJuiDialog', array(
        'id' => 'dialog_eett',
        'options' => array(
            'title' => 'Detalles de Proceso',
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

