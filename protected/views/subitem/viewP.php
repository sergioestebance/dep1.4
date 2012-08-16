<?php

$this->breadcrumbs = array(
	'Proyecto' => array('proyecto/viewproyectopc', 'id'=>$model->proyecto_id),
	GxHtml::valueEx($model),
);

$this->menu=array(

	array('label'=>Yii::t('app', 'Crear Proceso de Compra'), 'url'=>array('procesocompra/create', 'id' => $model->id)),
);
?>

<h1><?php echo Yii::t('app', 'Ver') . ' ' . GxHtml::encode($model->label()) . ' ' . GxHtml::encode(GxHtml::valueEx($model)); ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data' => $model,
	'attributes' => array(
'id',
array(
			'name' => 'proyecto',
			'type' => 'raw',
			'value' => $model->proyecto !== null ? GxHtml::link(GxHtml::encode(GxHtml::valueEx($model->proyecto)), array('proyecto/viewCompletoPc', 'id' => GxActiveRecord::extractPkValue($model->proyecto, true))) : null,
			),
/*array(
			'name' => 'tipoaporte',
			'type' => 'raw',
			'value' => $model->tipoaporte !== null ? GxHtml::link(GxHtml::encode(GxHtml::valueEx($model->tipoaporte)), array('tipoaporte/view', 'id' => GxActiveRecord::extractPkValue($model->tipoaporte, true))) : null,
			),
array(
			'name' => 'item',
			'type' => 'raw',
			'value' => $model->item !== null ? GxHtml::link(GxHtml::encode(GxHtml::valueEx($model->item)), array('item/view', 'id' => GxActiveRecord::extractPkValue($model->item, true))) : null,
			),
array(
			'name' => 'centrocosto',
			'type' => 'raw',
			'value' => $model->centrocosto !== null ? GxHtml::link(GxHtml::encode(GxHtml::valueEx($model->centrocosto)), array('centrocosto/view', 'id' => GxActiveRecord::extractPkValue($model->centrocosto, true))) : null,
			),*/
'tipoaporte',
'item',
'centrocosto',			
'codigo',
'descripcion',
'cantidad',
'costoUnitario',
'montos',
'correlativo',
'saldo',
	),
)); ?>
<br><br>

<?php 	
	
		$this->widget('zii.widgets.jui.CJuiTabs', array(
			'id'=> 'tabs_etapas',
			'tabs' => array(
				'Proceso Compra' => array('id' => 0,'content' => $this->renderPartial('//subitem/viewPc', array('model' => $model_pc,),$this),),
				'Proceso Gasto' => array('id' => 1,'content' => $this->renderPartial('//subitem/viewPg', array('model' => $model_pg,),$this),),
			),
				
			'options' => array(
				'collapsible' => false,
										
			),
			
		));
		
?>