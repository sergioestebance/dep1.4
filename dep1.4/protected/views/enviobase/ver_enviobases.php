<script type="text/javascript">
function addEnviobase()
{
    <?php echo CHtml::ajax(array(
            'url'=>Yii::app()->createUrl("enviobase/crear", array("id"=>$model_pc->id)),
            'data'=> "js:$(this).serialize()",
            'type'=>'post',
            'dataType'=>'json',
            'success'=>"function(data)
            {
                if (data.status == 'failure')
                {
                    $('#div_enviobase').html(data.div);
					$('#div_enviobase').show();
                    $('#div_enviobase form').submit(addEnviobase);
                }
                else
                {
                    $('#div_enviobase').html(data.div);
					$('#div_enviobase').hide('slow');
					$.fn.yiiGridView.update('enviobase-grid');
		        }
 
            } ",
            ))?>;
    return false; 
 
}
 
</script>

<?php 
$this->widget('zii.widgets.grid.CGridView', array(
	'id' => 'enviobase-grid',
	'dataProvider' => new CArrayDataProvider($model_pc->enviobases,array()),
	'columns' => array(
		'fecha',
		'nombreSupervisor',
		'estado',
		array(
			'class' => 'CButtonColumn',
			'template'=>'{view} {update}',
			'buttons'=>array(
				'view' => array(
					'label'=>'Ver etapa proceso de compra',
					'url'=>'Yii::app()->createUrl("enviobase/view", array("id"=>$data->id))',
				),
				'update' => array(
					'label'=>'editar etapa  proceso de compra',
					'url'=>'Yii::app()->createUrl("enviobase/update", array("id"=>$data->id))',
				),
			),
		),
	),
)); 
?>
<br>
<?php echo CHtml::link('AGREGAR', "",array('style'=>'cursor: pointer; text-decoration: underline;', 'onclick'=>"js:addEnviobase();"));
?>
<br><br>
<div id="div_enviobase" class="box"> 
</div>

<br>

