<script type="text/javascript">
function editResofcontratocon()
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
                    $('#div_resofcontrato_con').html(data.div);
					$('#div_resofcontrato_con').show();
                    $('#div_resofcontrato_con form').submit(editResofcontratocon);
                }
                else
                {
                    $('#div_resofcontrato_con').html(data.div);
					$('#div_resofcontrato_con').hide('slow');
				location.reload();	
		        }
						
            } ",
            ))?>;
    return false;  
} 

</script>

<?php $this->widget('zii.widgets.CDetailView', array(
	'id'=> 'detalle-resofcontrato-con',
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
		'name'=>'button-resofcontrato-con',
		'value'=>'ACTUALIZAR',
		'caption'=>'ACTUALIZAR',
		'onclick'=>'js: function(e){e.preventDefault();editResofcontratocon()}',
		)
);
?>

<br><br>
<div id="div_resofcontrato_con" class="box"> 
</div>
<br>

