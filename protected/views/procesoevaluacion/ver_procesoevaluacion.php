<script type="text/javascript">
function editPROCEVAL()
{
    <?php echo CHtml::ajax(array(
            'url'=>Yii::app()->createUrl("procesoevaluacion/editar", array("id"=>$model->id)),
            'data'=> "js:$(this).serialize()",
            'type'=>'post',
            'dataType'=>'json',
            'success'=>"function(data)
            {
                if (data.status == 'failure')
                {
                    $('#div_procesoevaluacion').html(data.div);
					$('#div_procesoevaluacion').show();
                    $('#div_procesoevaluacion form').submit(editPROCEVAL);
                }
                else
                {
                    $('#div_procesoevaluacion').html(data.div);
					$('#div_procesoevaluacion').hide('slow');
				location.reload();	
		        }
			
			
            } ",
            ))?>;
    return false;  
} 

</script>

<?php $this->widget('zii.widgets.CDetailView', array(
	'id'=> 'detalle-procesoevaluacion',
	'data' => $model,
	'attributes' => array(
	'fecha',
	'estado',
	'observacion',
	
	),
)); 


?>

<br>
<?php 
$this->widget('zii.widgets.jui.CJuiButton',
	array(
		'name'=>'button-procesoevaluacion',
		'value'=>'ACTUALIZAR',
		'caption'=>'ACTUALIZAR',
		'onclick'=>'js: function(e){e.preventDefault();editPROCEVAL()}',
		)
);
?>

<br><br>
<div id="div_procesoevaluacion" class="box"> 
</div>
<br>

