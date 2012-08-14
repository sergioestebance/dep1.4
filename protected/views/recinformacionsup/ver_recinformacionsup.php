<script type="text/javascript">
function editRecinformacionsup()
{
    <?php echo CHtml::ajax(array(
            'url'=>Yii::app()->createUrl("recinformacionsup/editar", array("id"=>$model->id)),
            'data'=> "js:$(this).serialize()",
            'type'=>'post',
            'dataType'=>'json',
            'success'=>"function(data)
            {
                if (data.status == 'failure')
                {
                    $('#div_recinformacionsup').html(data.div);
					$('#div_recinformacionsup').show();
                    $('#div_recinformacionsup form').submit(editRecinformacionsup);
                }
                else
                {
                    $('#div_recinformacionsup').html(data.div);
					$('#div_recinformacionsup').hide('slow');
				location.reload();	
		        }
			
			
            } ",
            ))?>;
    return false;  
} 

</script>

<?php $this->widget('zii.widgets.CDetailView', array(
	'id'=> 'detalle-recinformacionsup',
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
		'name'=>'button-recinformacionsup',
		'value'=>'ACTUALIZAR',
		'caption'=>'ACTUALIZAR',
		'onclick'=>'js: function(e){e.preventDefault();editRecopilacioninfo()}',
		)
);
?>

<br><br>
<div id="div_recinformacionsup" class="box"> 
</div>
<br>

