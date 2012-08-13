<script type="text/javascript">
function editOficioL()
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
                    $('#div_oc_l').html(data.div);
					$('#div_oc_l').show();
                    $('#div_oc_l form').submit(editOficioL);
                }
                else
                {
                    $('#div_oc_l').html(data.div);
					$('#div_oc_l').hide('slow');
				location.reload();	
		        }
			
			
            } ",
            ))?>;
    return false;  
} 

</script>

<?php $this->widget('zii.widgets.CDetailView', array(
	'id'=> 'detalle-oc-l',
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
		'name'=>'button-l',
		'value'=>'ACTUALIZAR',
		'caption'=>'ACTUALIZAR',
		'onclick'=>'js: function(e){e.preventDefault();editOficioL()}',
		)
);
?>

<br><br>
<div id="div_oc_l" class="box"> 
</div>
<br>

