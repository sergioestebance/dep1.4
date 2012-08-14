<script type="text/javascript">
function editPUBLICACION()
{
    <?php echo CHtml::ajax(array(
            'url'=>Yii::app()->createUrl("publicacion/editar", array("id"=>$model->id)),
            'data'=> "js:$(this).serialize()",
            'type'=>'post',
            'dataType'=>'json',
            'success'=>"function(data)
            {
                if (data.status == 'failure')
                {
                    $('#div_publicacion').html(data.div);
					$('#div_publicacion').show();
                    $('#div_publicacion form').submit(editPUBLICACION);
                }
                else
                {
                    $('#div_publicacion').html(data.div);
					$('#div_publicacion').hide('slow');
				location.reload();	
		        }
			
			
            } ",
            ))?>;
    return false;  
} 

</script>

<?php $this->widget('zii.widgets.CDetailView', array(
	'id'=> 'detalle-publicacion',
	'data' => $model,
	'attributes' => array(
	'fechaInicio',
	'fechaCierre',
	
	),
)); 


?>

<br>
<?php 
$this->widget('zii.widgets.jui.CJuiButton',
	array(
		'name'=>'button-publicacion',
		'value'=>'ACTUALIZAR',
		'caption'=>'ACTUALIZAR',
		'onclick'=>'js: function(e){e.preventDefault();editPUBLICACION()}',
		)
);
?>

<br><br>
<div id="div_publicacion" class="box"> 
</div>
<br>

