<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id' => 'procesocompra-grid',
	'dataProvider' => $model,
	'pager' => array('cssFile' => Yii::app()->baseUrl . '/css/gridViewStyle/gridView.css'),
	'cssFile' => Yii::app()->baseUrl . '/css/gridViewStyle/gridView.css',
	'summaryText' => 'Resultados :{start} - {end} de {count} ',
	//'filter' => $model,
	'columns' => array(
		'id',
		'sigla',
		'estado',
		array(
			'class' => 'CButtonColumn',
			'template'=>'{view}',
			'buttons'=>array(
				'view' => array(
					'label'=>'Ver proceso de compra',
					'url'=>'Yii::app()->createUrl("procesocompra/view", array("id"=>$data->id))',
				),
			),
		),
	),
)); ?>