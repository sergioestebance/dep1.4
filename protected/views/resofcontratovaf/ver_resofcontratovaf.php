<script type="text/javascript">
function editAbogadasecretaria()
{
    <?php echo CHtml::ajax(array(
            'url'=>Yii::app()->createUrl("abogadasecretaria/editar", array("id"=>$model->id)),
            'data'=> "js:$(this).serialize()",
            'type'=>'post',
            'dataType'=>'json',
            'success'=>"function(data)
            {
                if (data.status == 'failure')
                {
                    $('#div_abogadasecretaria').html(data.div);
					$('#div_abogadasecretaria').show();
                    $('#div_abogadasecretaria form').submit(editAbogadasecretaria);
                }
                else
                {
                    $('#div_abogadasecretaria').html(data.div);
					$('#div_abogadasecretaria').hide('slow');
				location.reload();	
		        }
			
			
            } ",
            ))?>;
    return false;  
} 

</script>

<?php $this->widget('zii.widgets.CDetailView', array(
	'id'=> 'detalle-abogadasecretaria',
	'data' => $model,
	'attributes' => array(
		'tipo',
		'estado',
		'fechaCreacion',
		'fechaRespuesta',
		'observacion',
		),
)); 


?>

<br>
<?php 
$this->widget('zii.widgets.jui.CJuiButton',
	array(
		'name'=>'button-abogadasecretaria',
		'value'=>'ACTUALIZAR',
		'caption'=>'ACTUALIZAR',
		'onclick'=>'js: function(e){e.preventDefault();editAbogadasecretaria()}',
		)
);
?>

<br><br>
<div id="div_abogadasecretaria" class="box"> 
</div>
<br>

