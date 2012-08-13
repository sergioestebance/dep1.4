<script type="text/javascript">
function editOficio()
{
    <?php echo CHtml::ajax(array(
            'url'=>Yii::app()->createUrl("oficioconductor/editar", array("id"=>$model->id)),
            'data'=> "js:$(this).serialize()",
            'type'=>'post',
            'dataType'=>'json',
            'success'=>"function(data)
            {
                if (data.status == 'failure')
                {
                    $('#div_aj').html(data.div);
					$('#div_aj').show();
                    $('#div_aj form').submit(editOficio);
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

<?php $this->widget('zii.widgets.CDetailView', array(
	'id'=> 'detalle-oc',
	'data' => $model,
	'attributes' => array(
	'tipo',
	'numCarta',
	'fecha',
	'observacion',
	
	),
)); 


?>

<br>
<?php 
$this->widget('zii.widgets.jui.CJuiButton',
	array(
		'name'=>'button',
		'value'=>'ACTUALIZAR',
		'caption'=>'ACTUALIZAR',
		'onclick'=>new CJavaScriptExpression('function(){editOficio();}'),
		)
);
?>

<br><br>
<div id="div_aj" class="box"> 
</div>
<br>

