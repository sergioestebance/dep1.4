<script type="text/javascript">
function editAsesorjuridico()
{
    <?php echo CHtml::ajax(array(
            'url'=>Yii::app()->createUrl("asesorjuridico/editar", array("id"=>$model->id)),
            'data'=> "js:$(this).serialize()",
            'type'=>'post',
            'dataType'=>'json',
            'success'=>"function(data)
            {
                if (data.status == 'failure')
                {
                    $('#div_asesorjuridico').html(data.div);
					$('#div_asesorjuridico').show();
                    $('#div_asesorjuridico form').submit(editAsesorjuridico);
                }
                else
                {
                    $('#div_asesorjuridico').html(data.div);
					$('#div_asesorjuridico').hide('slow');
				location.reload();	
		        }
			
			
            } ",
            ))?>;
    return false;  
} 

</script>

<?php $this->widget('zii.widgets.CDetailView', array(
	'id'=> 'detalle-asesorjuridico',
	'data' => $model,
	'attributes' => array(
		'fechaConfeccionContrato',
		'observacion',
		'fechaRespuesta',	
		),
)); 


?>

<br>
<?php 
$this->widget('zii.widgets.jui.CJuiButton',
	array(
		'name'=>'button-asesorjuridico',
		'value'=>'ACTUALIZAR',
		'caption'=>'ACTUALIZAR',
		'onclick'=>'js: function(e){e.preventDefault();editAsesorjuridico()}',
		)
);
?>

<br><br>
<div id="div_asesorjuridico" class="box"> 
</div>
<br>

