<script type="text/javascript">
function editDirector()
{
    <?php echo CHtml::ajax(array(
            'url'=>Yii::app()->createUrl("directorproyecto/editar", array("id"=>$model->aj->id)),
            'data'=> "js:$(this).serialize()",
            'type'=>'post',
            'dataType'=>'json',
            'success'=>"function(data)
            {
                if (data.status == 'failure')
                {
                    $('#div_directorproyecto').html(data.div);
					$('#div_directorproyecto').show();
                    $('#div_directorproyecto form').submit(editAJ);
                }
                else
                {
                    $('#div_directorproyecto').html(data.div);
					$('#div_directorproyecto').hide('slow');
				location.reload();	
		        }
			
			
            } ",
            ))?>;
    return false; 
 
} 
</script>

<?php 

	$this->widget('zii.widgets.CDetailView', array(
	'id'=> 'detalle-directorproyecto',
	'data' => $model->directorproyecto,
	'attributes' => array(
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
		'name'=>'button-dp',
		'value'=>'ACTUALIZAR',
		'caption'=>'ACTUALIZAR',
		'onclick'=>'js: function(e){e.preventDefault(); editDirector()}',
		)
);
?>

<br><br>
<div id="div_directorproyecto" class="box"> 
</div>
<br>

