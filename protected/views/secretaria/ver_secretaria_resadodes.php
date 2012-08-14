<script type="text/javascript">
function editSRADODES()
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
                    $('#div_secretaria_adodes').html(data.div);
					$('#div_secretaria_adodes').show();
                    $('#div_secretaria_adodes form').submit(editSRADODES);
                }
                else
                {
                    $('#div_secretaria_adodes').html(data.div);
					$('#div_secretaria_adodes').hide('slow');
				location.reload();	
		        }
			
			
            } ",
            ))?>;
    return false; 
 
} 
</script>

<?php $this->widget('zii.widgets.CDetailView', array(
	'id'=> 'detalle-secretaria-adodes',
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
		'name'=>'button-secretaria-adodes',
		'value'=>'ACTUALIZAR',
		'caption'=>'ACTUALIZAR',
		'onclick'=>'js: function(e){e.preventDefault(); editSRADODES()}',
		)
);
?>

<br><br>
<div id="div_secretaria_adodes" class="box"> 
</div>
<br>

