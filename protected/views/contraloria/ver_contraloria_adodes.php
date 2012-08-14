<script type="text/javascript">
function editCONTRALORIAADODES()
{
    <?php echo CHtml::ajax(array(
            'url'=>Yii::app()->createUrl("contraloria/editar", array("id"=>$model->id)),
            'data'=> "js:$(this).serialize()",
            'type'=>'post',
            'dataType'=>'json',
            'success'=>"function(data)
            {
                if (data.status == 'failure')
                {
                    $('#div_contraloria_adodes').html(data.div);
					$('#div_contraloria_adodes').show();
                    $('#div_contraloria_adodes form').submit(editCONTRALORIAADODES);
                }
                else
                {
                    $('#div_contraloria_adodes').html(data.div);
					$('#div_contraloria_adodes').hide('slow');
				location.reload();	
		        }
			
			
            } ",
            ))?>;
    return false;  
} 

</script>

<?php $this->widget('zii.widgets.CDetailView', array(
	'id'=> 'detalle-contraloria-adodes',
	'data' => $model,
	'attributes' => array(
	'tipo',
	'estado',
	'fechaCreacion',
	'fechaRespuesta',

	),
)); 


?>

<br>
<?php 
$this->widget('zii.widgets.jui.CJuiButton',
	array(
		'name'=>'button-contraloria-adodes',
		'value'=>'ACTUALIZAR',
		'caption'=>'ACTUALIZAR',
		'onclick'=>'js: function(e){e.preventDefault();editCONTRALORIAADODES()}',
		)
);
?>

<br><br>
<div id="div_contraloria_adodes" class="box"> 
</div>
<br>

