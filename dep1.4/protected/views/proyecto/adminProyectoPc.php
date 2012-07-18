

<h1><?php echo Yii::t('app', 'Administrar') . ' ' . GxHtml::encode($model->label(2)); ?></h1>

<p>
Se pueden ocupar los operadores de comparacion (&lt;, &lt;=, &gt;, &gt;=, &lt;&gt; or =) al principio de cada valor de filtrado.
</p>

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id' => 'proyecto-grid',
	'dataProvider' => $model->search(),
	'pager' => array('cssFile' => Yii::app()->baseUrl . '/css/gridViewStyle/gridView.css'),
	'cssFile' => Yii::app()->baseUrl . '/css/gridViewStyle/gridView.css',
	'summaryText' => 'Resultados :{start} - {end} de {count} ',
	'filter' => $model,
	'columns' => array(
		'id',
		'codigoProyecto',
		'nombre',
		'codigoBip',
		'duracion',
		'director',
		array(
			'class' => 'CButtonColumn',
			'template'=>'{view}',
			'buttons'=>array(
				'view' => array(
					'label'=>'Ver Proyecto',
					'url'=>'Yii::app()->createUrl("proyecto/viewProyectoPc", array("id"=>$data->id))',
				),
			),
	) ),
)); ?>