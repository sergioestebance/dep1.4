<script type="text/javascript">
function editSRESOFL1()
{
    <?php echo CHtml::ajax(array(
            'url'=>Yii::app()->createUrl("secretaria/editar", array("id"=>$model->id)),
            'data'=> "js:$(this).serialize()",
            'type'=>'post',
            'dataType'=>'json',
            'success'=>"function(data)
            {
                if (data.status == 'failure')
                {
                    $('#div_secretaria_sofl1').html(data.div);
					$('#div_secretaria_sofl1').show();
                    $('#div_secretaria_sofl1 form').submit(editSRESOFL1);
                }
                else
                {
                    $('#div_secretaria_sofl1').html(data.div);
					$('#div_secretaria_sofl1').hide('slow');
				location.reload();	
		        }
			
			
            } ",
            ))?>;
    return false; 
 
} 
</script>

<?php $this->widget('zii.widgets.CDetailView', array(
	'id'=> 'detalle-secretaria-sofl1',
	'data' => $model,
	'attributes' => array(
	'tipo',
	'fechaCreacion',
	'fechaRespuesta',
	'estado',
	'observacion',
	
	),
)); 


?>

<br>
<?php 
$this->widget('zii.widgets.jui.CJuiButton',
	array(
		'name'=>'button-secretaria-sofl1',
		'value'=>'ACTUALIZAR',
		'caption'=>'ACTUALIZAR',
		'onclick'=>'js: function(e){e.preventDefault(); editSRESOFL1()}',
		)
);
?>

<br><br>
<div id="div_secretaria_sofl1" class="box"> 
</div>
<br>

