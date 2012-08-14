<script type="text/javascript">
function editAJ()
{
    <?php echo CHtml::ajax(array(
            'url'=>Yii::app()->createUrl("aj/editar", array("id"=>$model->aj->id)),
            'data'=> "js:$(this).serialize()",
            'type'=>'post',
            'dataType'=>'json',
            'success'=>"function(data)
            {
                if (data.status == 'failure')
                {
                    $('#div_aj').html(data.div);
					$('#div_aj').show();
                    $('#div_aj form').submit(editAJ);
                }
                else
                {
                    $('#div_aj').html(data.div);
					$('#div_aj').hide('slow');
				location.reload();	
		        }
			
			
            } ",
            ))?>;
    return false; 
 
} 
</script>

<?php
 $this->widget('zii.widgets.CDetailView', array(
	'id'=> 'detalle-aj',
	'data' => $model->aj,
	'attributes' => array(
	'tipo',
	'fechaCreacion',
	'fechaRespuesta',
	'estado',	
	),
)); 


?>

<br>
<?php 
$this->widget('zii.widgets.jui.CJuiButton',
	array(
		'name'=>'button-aj',
		'value'=>'ACTUALIZAR',
		'caption'=>'ACTUALIZAR',
		'onclick'=>'js: function(e){e.preventDefault(); editAJ()}',
		)
);
?>

<br><br>
<div id="div_aj" class="box"> 
</div>
<br>

