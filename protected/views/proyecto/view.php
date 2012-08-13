<?php

$this->breadcrumbs = array(
	$model->label(2) => array('admin'),
	GxHtml::valueEx($model),
);

$this->menu=array(
	array('label'=>Yii::t('app', 'Listar') . ' ' . $model->label(2), 'url'=>array('index')),
	array('label'=>Yii::t('app', 'Crear') . ' ' . $model->label(), 'url'=>array('create')),
	array('label'=>Yii::t('app', 'Actualizar') . ' ' . $model->label(), 'url'=>array('update', 'id' => $model->id)),
	array('label'=>Yii::t('app', 'Eliminar') . ' ' . $model->label(), 'url'=>'#', 'linkOptions' => array('submit' => array('delete', 'id' => $model->id), 'confirm'=>'Seguro desea borrar esta item?')),
	array('label'=>Yii::t('app', 'Administrar') . ' ' . $model->label(2), 'url'=>array('admin')),
	array('label'=>Yii::t('app', 'Ingresar Subitem'), 'url'=>array('subitem/createProyecto', 'id' => $model->id)),
	array('label'=>Yii::t('app', 'Ver Proyecto Completo'), 'url'=>array('viewcompleto', 'id' => $model->id)),
	array('label'=>Yii::t('app', 'Exportar Proyecto'), 'url'=>array('export', 'id' => $model->id)),
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
	'dataProvider' => $model_subitems,
	'pager' => array('cssFile' => Yii::app()->baseUrl . '/css/gridViewStyle/gridView.css'),
	'cssFile' => Yii::app()->baseUrl . '/css/gridViewStyle/gridView.css',
	'summaryText' => 'Resultados :{start} - {end} de {count} ',
	'columns' => array(
		array(
                    'header'=>'Indice',
                    'name'=>'correlativo',
				),
		array(
                    'header'=>'Codigo',
                    'name'=>'codigo',
				),
		array(
                    'header'=>'Descripcion',
                    'name'=>'descripcion',
				),
		array(
                    'header'=>'Cantidad',
                    'name'=>'cantidad',
				),
		array(
                    'header'=>'Costo Unitario',
                    'name'=>'costoUnitario',
				),
		array(
                    'header'=>'Monto Total',
                    'name'=>'montos',
				),

				array(
			'class'=>'CButtonColumn',
			'template'=>'{view} {update} {delete}',
			'buttons'=>array
			(			
			'view' => array
				(
				'label' => 'ver subitem',
                'url'=>'Yii::app()->createUrl("subitem/view", array("id"=>$data->id))',
				),
			'update' => array
				(
				'label' => 'ver subitem',
                'url'=>'Yii::app()->createUrl("subitem/update", array("id"=>$data->id))',
				),
			'delete' => array
				(
				'label' => 'ver subitem',
                'url'=>'Yii::app()->createUrl("subitem/delete", array("id"=>$data->id))',
				),
				),
			),
	),
)); ?>


<?php $this->beginWidget('zii.widgets.jui.CJuiDialog', array(
        'id' => 'dialog_eett',
        'options' => array(
            'title' => 'Detalles de Proceso compra',
            'autoOpen' => false,

			'buttons'=>array(
                //'Aceptar'=>'js:function(){ $(this).dialog("close")}',
				),
			),
		)); ?>
		<div id="divForForm"></div>
		<?php $this->endWidget() ?>

