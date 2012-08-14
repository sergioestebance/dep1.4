<script type="text/javascript">
function editVaf()
{
    <?php echo CHtml::ajax(array(
            'url'=>Yii::app()->createUrl("vaf/editar", array("id"=>$model->id)),
            'data'=> "js:$(this).serialize()",
            'type'=>'post',
            'dataType'=>'json',
            'success'=>"function(data)
            {
                if (data.status == 'failure')
                {
                    $('#div_vaf').html(data.div);
					$('#div_vaf').show();
                    $('#div_vaf form').submit(editVaf);
                }
                else
                {
                    $('#div_vaf').html(data.div);
					$('#div_vaf').hide('slow');
				location.reload();	
		        }
			
			
            } ",
            ))?>;
    return false;  
} 

</script>

<?php $this->widget('zii.widgets.CDetailView', array(
	'id'=> 'detalle-vaf',
	'data' => $model,
	'attributes' => array(
	'numResolucion',
	'fechaCreacion',
	'fechaRespuesta',
	
	),
)); 


?>

<br>
<?php 
$this->widget('zii.widgets.jui.CJuiButton',
	array(
		'name'=>'button-vaf',
		'value'=>'ACTUALIZAR',
		'caption'=>'ACTUALIZAR',
		'onclick'=>'js: function(e){e.preventDefault();editVaf()}',
		)
);
?>

<br><br>
<div id="div_vaf" class="box"> 
</div>
<br>

