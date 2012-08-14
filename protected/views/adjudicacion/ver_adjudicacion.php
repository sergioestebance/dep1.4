<script type="text/javascript">
function editAdjudicacion()
{
    <?php echo CHtml::ajax(array(
            'url'=>Yii::app()->createUrl("adjudicacion/editar", array("id"=>$model->id)),
            'data'=> "js:$(this).serialize()",
            'type'=>'post',
            'dataType'=>'json',
            'success'=>"function(data)
            {
                if (data.status == 'failure')
                {
                    $('#div_adjudicacion').html(data.div);
					$('#div_adjudicacion').show();
                    $('#div_adjudicacion form').submit(editAdjudicacion);
                }
                else
                {
                    $('#div_adjudicacion').html(data.div);
					$('#div_adjudicacion').hide('slow');
				location.reload();	
		        }
			
			
            } ",
            ))?>;
    return false;  
} 

</script>

<?php $this->widget('zii.widgets.CDetailView', array(
	'id'=> 'detalle-adjudicacion',
	'data' => $model,
	'attributes' => array(
	'fecha',
	'observacion',
	
	),
)); 


?>

<br>
<?php 
$this->widget('zii.widgets.jui.CJuiButton',
	array(
		'name'=>'button-adjudicacion',
		'value'=>'ACTUALIZAR',
		'caption'=>'ACTUALIZAR',
		'onclick'=>'js: function(e){e.preventDefault();editAdjudicacion()}',
		)
);
?>

<br><br>
<div id="div_adjudicacion" class="box"> 
</div>
<br>

