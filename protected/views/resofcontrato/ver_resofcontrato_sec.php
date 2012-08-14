<script type="text/javascript">
function editResofcontratosec()
{
    <?php echo CHtml::ajax(array(
            'url'=>Yii::app()->createUrl("resofcontrato/editar", array("id"=>$model->id)),
            'data'=> "js:$(this).serialize()",
            'type'=>'post',
            'dataType'=>'json',
            'success'=>"function(data)
            {
                if (data.status == 'failure')
                {
                    $('#div_resofcontrato_sec').html(data.div);
					$('#div_resofcontrato_sec').show();
                    $('#div_resofcontrato_sec form').submit(editResofcontratosec);
                }
                else
                {
                    $('#div_resofcontrato_sec').html(data.div);
					$('#div_resofcontrato_sec').hide('slow');
				location.reload();	
		        }
						
            } ",
            ))?>;
    return false;  
} 

</script>

<?php $this->widget('zii.widgets.CDetailView', array(
	'id'=> 'detalle-resofcontrato-sec',
	'data' => $model,
	'attributes' => array(
	'tipo',
	'estado',
	'fechaCreacion',
	'fechaRespuesta',
	'observacion',
	
	
	),
)); 


?>

<br>
<?php 
$this->widget('zii.widgets.jui.CJuiButton',
	array(
		'name'=>'button-resofcontrato-sec',
		'value'=>'ACTUALIZAR',
		'caption'=>'ACTUALIZAR',
		'onclick'=>'js: function(e){e.preventDefault();editResofcontratosec()}',
		)
);
?>

<br><br>
<div id="div_resofcontrato_sec" class="box"> 
</div>
<br>

