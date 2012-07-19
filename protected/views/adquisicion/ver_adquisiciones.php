<script type="text/javascript">
function addAdquisicion()
{
    <?php echo CHtml::ajax(array(
            'url'=>Yii::app()->createUrl("adquisicion/crear", array("id"=>$model_pc->id)),
            'data'=> "js:$(this).serialize()",
            'type'=>'post',
            'dataType'=>'json',
            'success'=>"function(data)
            {
                if (data.status == 'failure')
                {
                    $('#div_adquisicion').html(data.div);
					$('#div_adquisicion').show();
                    $('#div_adquisicion form').submit(addAdquisicion);
                }
                else
                {
                    $('#div_adquisicion').html(data.div);
					$('#div_adquisicion').hide('slow');
					$.fn.yiiGridView.update('adquisicion-grid');
		        }
 
            } ",
            ))?>;
    return false; 
 
}
 
</script>

<?php 
$this->widget('zii.widgets.grid.CGridView', array(
	'id' => 'adquisicion-grid',
	'dataProvider' => new CArrayDataProvider($model_pc->adquisicions,array()),
	'columns' => array(
		'fecha',
		'observacion',
		'estado',
		array(
			'class' => 'CButtonColumn',
			'template'=>'{view} {update}',
			'buttons'=>array(
				'view' => array(
					'label'=>'Ver etapa proceso de compra',
					'url'=>'Yii::app()->createUrl("adquisicion/view", array("id"=>$data->id))',
				),
				'update' => array(
					'label'=>'editar etapa  proceso de compra',
					'url'=>'Yii::app()->createUrl("adquisicion/update", array("id"=>$data->id))',
				),
			),
		),
	),
)); 
?>
<br>
<?php echo CHtml::link('AGREGAR', "",array('style'=>'cursor: pointer; text-decoration: underline;', 'onclick'=>"js:addAdquisicion();"));
?>
<br><br>
<div id="div_adquisicion" class="box"> 
</div>

<br>

