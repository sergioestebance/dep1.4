<script type="text/javascript">
function editOficioADODES()
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
                    $('#div_oc_adodes').html(data.div);
					$('#div_oc_adodes').show();
                    $('#div_oc_adodes form').submit(editOficioADODES);
                }
                else
                {
                    $('#div_oc_adodes').html(data.div);
					$('#div_oc_adodes').hide('slow');
				location.reload();	
		        }
			
			
            } ",
            ))?>;
    return false; 
 
} 
</script>

<?php $this->widget('zii.widgets.CDetailView', array(
	'id'=> 'detalle-oc-adodes',
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
		'name'=>'button-adodes',
		'value'=>'ACTUALIZAR',
		'caption'=>'ACTUALIZAR',
		'onclick'=>'js: function(e){e.preventDefault();editOficioADODES()}',
		)
);
?>

<br><br>
<div id="div_oc_adodes" class="box"> 
</div>
<br>

