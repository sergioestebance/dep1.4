<script type="text/javascript">
function editRecopilacioninfo()
{
    <?php echo CHtml::ajax(array(
            'url'=>Yii::app()->createUrl("recopilacioninfo/editar", array("id"=>$model->id)),
            'data'=> "js:$(this).serialize()",
            'type'=>'post',
            'dataType'=>'json',
            'success'=>"function(data)
            {
                if (data.status == 'failure')
                {
                    $('#div_recopilacioninfo').html(data.div);
					$('#div_recopilacioninfo').show();
                    $('#div_recopilacioninfo form').submit(editRecopilacioninfo);
                }
                else
                {
                    $('#div_recopilacioninfo').html(data.div);
					$('#div_recopilacioninfo').hide('slow');
				location.reload();	
		        }
			
			
            } ",
            ))?>;
    return false;  
} 

</script>

<?php $this->widget('zii.widgets.CDetailView', array(
	'id'=> 'detalle-recopilacioninfo',
	'data' => $model,
	'attributes' => array(
	'fase',
	'fecha1',
	'fecha2',
	'observacion',
	
	),
)); 


?>

<br>
<?php 
$this->widget('zii.widgets.jui.CJuiButton',
	array(
		'name'=>'button-recopilacioninfo',
		'value'=>'ACTUALIZAR',
		'caption'=>'ACTUALIZAR',
		'onclick'=>'js: function(e){e.preventDefault();editRecopilacioninfo()}',
		)
);
?>

<br><br>
<div id="div_recopilacioninfo" class="box"> 
</div>
<br>

