<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id' => 'procesogasto-grid',
	'dataProvider' => $model,
	'pager' => array('cssFile' => Yii::app()->baseUrl . '/css/gridViewStyle/gridView.css'),
	'cssFile' => Yii::app()->baseUrl . '/css/gridViewStyle/gridView.css',
	'summaryText' => 'Resultados :{start} - {end} de {count} ',
	//'filter' => $model,
	'columns' => array(
		'id',
		'tipo',
		'estado',
		array(
			'class' => 'CButtonColumn',
			'template'=>'{view}',
			'buttons'=>array(
				'view' => array(
					'label'=>'Ver proceso de Gasto',
					'url'=>'Yii::app()->createUrl("procesogasto/view", array("id"=>$data->id))',
				),
			),
		),
	),
)); ?>