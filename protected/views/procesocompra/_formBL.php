<script type="text/javascript">
function editBL()
{
    <?php echo CHtml::ajax(array(
            'url'=>Yii::app()->createUrl("procesocompra/editarBL", array("id"=>$model->id)),
            'data'=> "js:$(this).serialize()",
            'type'=>'post',
            'dataType'=>'json',
            'success'=>"function(data)
            {
                if (data.status == 'failure')
                {
                    $('#div_bl').html(data.div);
					$('#div_bl').show();
                    $('#div_bl form').submit(editBL);
                }
                else
                {
                    $('#div_bl').html(data.div);
					$('#div_bl').hide('slow');
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
		'fechaBL',
		'idBL',
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
			'onclick'=>'js: editBL()',
			),
		)
); ?>
<br><br>
<div id="div_bl" class="box"> 
</div>
<br>

