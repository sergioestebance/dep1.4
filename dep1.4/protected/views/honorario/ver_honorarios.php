<script type="text/javascript">
function addHonorario()
{
    <?php echo CHtml::ajax(array(
            'url'=>Yii::app()->createUrl("honorario/crear", array("id"=>$model_pc->id)),
            'data'=> "js:$(this).serialize()",
            'type'=>'post',
            'dataType'=>'json',
            'success'=>"function(data)
            {
                if (data.status == 'failure')
                {
                    $('#div_honorario').html(data.div);
					$('#div_honorario').show();
                    $('#div_honorario form').submit(addHonorario);
                }
                else
                {
                    $('#div_honorario').html(data.div);
					$('#div_honorario').hide('slow');
					$.fn.yiiGridView.update('honorario-grid');
		        }
 
            } ",
            ))?>;
    return false; 
 
}
 
</script>

<?php 
$this->widget('zii.widgets.grid.CGridView', array(
	'id' => 'honorario-grid',
	'dataProvider' => new CArrayDataProvider($model_pc->honorarios,array()),
	'columns' => array(
		'item',
		'nombrePersona',
		'rut',
		'numConvenio',
		'fechaInicio',
		'fechaTermino',
		'cuotas',
		'monto',/*
		'fechaRecilio',
		'reciliacion',*/
		array(
			'class' => 'CButtonColumn',
			'template'=>'{view} {update}',
			'buttons'=>array(
				'view' => array(
					'label'=>'Ver etapa proceso de gasto',
					'url'=>'Yii::app()->createUrl("honorario/view", array("id"=>$data->id))',
				),
				'update' => array(
					'label'=>'editar etapa  proceso de compra',
					'url'=>'Yii::app()->createUrl("honorario/update", array("id"=>$data->id))',
				),
			),
		),
	),
)); 
?>
<br>
<?php echo CHtml::link('AGREGAR', "",array('style'=>'cursor: pointer; text-decoration: underline;', 'onclick'=>"js:addHonorario();"));
?>
<br><br>
<div id="div_honorario" class="box"> 
</div>

<br>

