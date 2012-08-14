<script type="text/javascript">
function editComisionevaluacion()
{
    <?php echo CHtml::ajax(array(
            'url'=>Yii::app()->createUrl("comisionevaluacion/editar", array("id"=>$model->id)),
            'data'=> "js:$(this).serialize()",
            'type'=>'post',
            'dataType'=>'json',
            'success'=>"function(data)
            {
                if (data.status == 'failure')
                {
                    $('#div_comisionevaluacion').html(data.div);
					$('#div_comisionevaluacion').show();
                    $('#div_comisionevaluacion form').submit(editComisionevaluacion);
                }
                else
                {
                    $('#div_comisionevaluacion').html(data.div);
					$('#div_comisionevaluacion').hide('slow');
				location.reload();	
		        }
			
			
            } ",
            ))?>;
    return false;  
} 

</script>

<?php $this->widget('zii.widgets.CDetailView', array(
	'id'=> 'detalle-comisionevaluacion',
	'data' => $model,
	'attributes' => array(
	'estado',
	'fecha',
	'observacion',
	
	),
)); 


?>

<br>
<?php 
$this->widget('zii.widgets.jui.CJuiButton',
	array(
		'name'=>'button-comisionevaluacion',
		'value'=>'ACTUALIZAR',
		'caption'=>'ACTUALIZAR',
		'onclick'=>'js: function(e){e.preventDefault();editComisionevaluacion()}',
		)
);
?>

<br><br>
<div id="div_comisionevaluacion" class="box"> 
</div>
<br>

