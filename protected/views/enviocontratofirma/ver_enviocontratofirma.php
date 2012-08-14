<script type="text/javascript">
function editEnviocontratofirma()
{
    <?php echo CHtml::ajax(array(
            'url'=>Yii::app()->createUrl("enviocontratofirma/editar", array("id"=>$model->id)),
            'data'=> "js:$(this).serialize()",
            'type'=>'post',
            'dataType'=>'json',
            'success'=>"function(data)
            {
                if (data.status == 'failure')
                {
                    $('#div_enviocontratofirma').html(data.div);
					$('#div_enviocontratofirma').show();
                    $('#div_enviocontratofirma form').submit(editEnviocontratofirma);
                }
                else
                {
                    $('#div_enviocontratofirma').html(data.div);
					$('#div_enviocontratofirma').hide('slow');
				location.reload();	
		        }
			
			
            } ",
            ))?>;
    return false;  
} 

</script>

<?php $this->widget('zii.widgets.CDetailView', array(
	'id'=> 'detalle-enviocontratofirma',
	'data' => $model,
	'attributes' => array(
		'fechaCreacion',
		'estado',
		'fechaProveedor',
		'fechaFirmaContrato',
		'observacion',
		),
)); 


?>

<br>
<?php 
$this->widget('zii.widgets.jui.CJuiButton',
	array(
		'name'=>'button-enviocontratofirma',
		'value'=>'ACTUALIZAR',
		'caption'=>'ACTUALIZAR',
		'onclick'=>'js: function(e){e.preventDefault();editEnviocontratofirma()}',
		)
);
?>

<br><br>
<div id="div_enviocontratofirma" class="box"> 
</div>
<br>

