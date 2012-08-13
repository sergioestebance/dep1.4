<script type="text/javascript">
function editAJ()
{
    <?php echo CHtml::ajax(array(
            'url'=>Yii::app()->createUrl("aj/editar", array("id"=>$model->aj->id)),
            'data'=> "js:$(this).serialize()",
            'type'=>'post',
            'dataType'=>'json',
            'success'=>"function(data)
            {
                if (data.status == 'failure')
                {
                    $('#div_aj').html(data.div);
					$('#div_aj').show();
                    $('#div_aj form').submit(editAJ);
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

<?php $this->widget('bootstrap.widgets.BootDetailView', array(
	'id'=> 'detalle-aj',
	'data' => $model->aj,
	'attributes' => array(
	'tipo',
	'fechaCreacion',
	'fechaRespuesta',
	'estado',
	
	),
)); 


?>

<br>
<?php $this->widget('bootstrap.widgets.BootButton', array(
    'label'=>'AGREGAR',
    'type'=>'primary', // '', 'primary', 'info', 'success', 'warning', 'danger' or 'inverse'
    'size'=>'large', // '', 'large', 'small' or 'mini'
	"htmlOptions"=>array(
		'onClick'=>'js: editAJ();',
		),
)); ?>

<br><br>
<div id="div_aj" > 
</div>
<br>

