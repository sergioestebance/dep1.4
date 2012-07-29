<script type="text/javascript">
function addPeticion()
{
    <?php echo CHtml::ajax(array(
            'url'=>Yii::app()->createUrl("peticionet/crear", array("id"=>$model_pc->id)),
            'data'=> "js:$(this).serialize()",
            'type'=>'post',
            'dataType'=>'json',
            'success'=>"function(data)
            {
                if (data.status == 'failure')
                {
                    $('#div_peticionet').html(data.div);
                    $('#div_peticionet form').submit(addPeticion);
					$('#div_peticionet').show();
                }
                else
                {
                    $('#div_peticionet').html(data.div);
					$('#div_peticionet').hide('slow');
					//$.fn.yiiGridView.update('peticionet-grid');
		        }
			
            } ",
            ))?>;
			
    return false; 
 
}
 
</script>

<?php 

$this->widget('zii.widgets.grid.CGridView', array(
	'id' => 'peticionet-grid',
	'dataProvider' => new CArrayDataProvider($model_pc->peticionets,array()),
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
					'url'=>'Yii::app()->createUrl("peticionet/view", array("id"=>$data->id))',
				),
				'update' => array(
					'label'=>'editar etapa  proceso de compra',
					'url'=>'Yii::app()->createUrl("peticionet/update", array("id"=>$data->id))',
				),
			),
		),
	),
)); 
?>
<br>
<?php echo CHtml::link('AGREGAR', "",array('style'=>'cursor: pointer; text-decoration: underline;', 'onclick'=>"js: addPeticion();"));?><br>

<br><br>
<div id="div_peticionet" class="box"> 
</div>

<br>

