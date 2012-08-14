<script type="text/javascript">
function editCONTRALORIA()
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
                    $('#div_contraloria').html(data.div);
					$('#div_contraloria').show();
                    $('#div_contraloria form').submit(editCONTRALORIA);
                }
                else
                {
                    $('#div_contraloria').html(data.div);
					$('#div_contraloria').hide('slow');
				location.reload();	
		        }
			
			
            } ",
            ))?>;
    return false;  
} 

</script>

<?php $this->widget('zii.widgets.CDetailView', array(
	'id'=> 'detalle-contraloria',
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
		'name'=>'button-contraloria',
		'value'=>'ACTUALIZAR',
		'caption'=>'ACTUALIZAR',
		'onclick'=>'js: function(e){e.preventDefault();editCONTRALORIA()}',
		)
);
?>

<br><br>
<div id="div_contraloria" class="box"> 
</div>
<br>

