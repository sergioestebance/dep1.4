<script type="text/javascript">
function editRADODES()
{
    <?php echo CHtml::ajax(array(
            'url'=>Yii::app()->createUrl("resolucionadodes/editar", array("id"=>$model->id)),
            'data'=> "js:$(this).serialize()",
            'type'=>'post',
            'dataType'=>'json',
            'success'=>"function(data)
            {
                if (data.status == 'failure')
                {
                    $('#div_resolucionadodes').html(data.div);
					$('#div_resolucionadodes').show();
                    $('#div_resolucionadodes form').submit(editRADODES);
                }
                else
                {
                    $('#div_resolucionadodes').html(data.div);
					$('#div_resolucionadodes').hide('slow');
				location.reload();	
		        }
			
			
            } ",
            ))?>;
    return false;  
} 

</script>

<?php $this->widget('zii.widgets.CDetailView', array(
	'id'=> 'detalle-resolucionadodes',
	'data' => $model,
	'attributes' => array(
	'fechaCreacion',
	'numResolucion',
	'firma',
	'fechaRes',
	'fechaFirma',
	'actaAdodes',
	'fechaActa',
	
	
	),
)); 


?>

<br>
<?php 
$this->widget('zii.widgets.jui.CJuiButton',
	array(
		'name'=>'button-resolucionadodes',
		'value'=>'ACTUALIZAR',
		'caption'=>'ACTUALIZAR',
		'onclick'=>'js: function(e){e.preventDefault();editRADODES()}',
		)
);
?>

<br><br>
<div id="div_resolucionadodes" class="box"> 
</div>
<br>

