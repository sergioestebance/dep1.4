<script type="text/javascript">
function editTD()
{
    <?php echo CHtml::ajax(array(
            'url'=>Yii::app()->createUrl("procesocompra/editarTD", array("id"=>$model->id)),
            'data'=> "js:$(this).serialize()",
            'type'=>'post',
            'dataType'=>'json',
            'success'=>"function(data)
            {
                if (data.status == 'failure')
                {
                    $('#div_td').html(data.div);
					$('#div_td').show();
                    $('#div_td form').submit(editTD);
                }
                else
                {
                    $('#div_td').html(data.div);
					$('#div_td').hide('slow');
				location.reload();	
		        }
			
			
            } ",
            ))?>;
    return false; 
	
	
 
}
 
</script>
<?php
$this->widget('zii.widgets.CDetailView', array(
	'data' => $model,
	'attributes' => array(	
		'fechaTD',
		'numeroidTD',
		'observacionTD',
			),
)); 


?>

<br>


<?php 
$this->widget('bootstrap.widgets.BootButton', array(
		'label'=>'ACTUALIZAR',
		'type'=>'primary',
		'size'=>'large',
		 'htmlOptions'=>array(
			'onclick'=>'js: editTD()',
			),
		)
); ?>
<br><br>
<div id="div_td" class="box"> 
</div>
<br>

