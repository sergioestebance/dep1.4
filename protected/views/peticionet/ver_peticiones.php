

<script type="text/javascript">
test=null;
$(document).ready(function() {
   test = $.fn.yiiGridView;
});

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
					test.update('peticionet-grid');
                    $('#div_peticionet').html(data.div);
					$('#div_peticionet').hide('slow');
					
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
<?php 
$this->widget('bootstrap.widgets.BootButton', array(
		'label'=>'AGREGAR',
		'type'=>'primary',
		 'size'=>'large',
		 'htmlOptions'=>array(
			'onclick'=>'js: addPeticion()',
			),
		)
);
?>
<br><br>
<div id="div_peticionet" class="box"> 
</div>

<br>

