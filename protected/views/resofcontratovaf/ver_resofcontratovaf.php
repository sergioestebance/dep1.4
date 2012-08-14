<script type="text/javascript">
function editResofcontratovaf()
{
    <?php echo CHtml::ajax(array(
            'url'=>Yii::app()->createUrl("resofcontratovaf/editar", array("id"=>$model->id)),
            'data'=> "js:$(this).serialize()",
            'type'=>'post',
            'dataType'=>'json',
            'success'=>"function(data)
            {
                if (data.status == 'failure')
                {
                    $('#div_resofcontratovaf').html(data.div);
					$('#div_resofcontratovaf').show();
                    $('#div_resofcontratovaf form').submit(editResofcontratovaf);
                }
                else
                {
                    $('#div_resofcontratovaf').html(data.div);
					$('#div_resofcontratovaf').hide('slow');
				location.reload();	
		        }
			
			
            } ",
            ))?>;
    return false;  
} 

</script>

<?php $this->widget('zii.widgets.CDetailView', array(
	'id'=> 'detalle-resofcontratovaf',
	'data' => $model,
	'attributes' => array(
		'fechaCreacion',
		'numRes',
		'fechaNumRes',
		'firma',
		'fechaFirma',
		),
)); 


?>

<br>
<?php 
$this->widget('zii.widgets.jui.CJuiButton',
	array(
		'name'=>'button-resofcontratovaf',
		'value'=>'ACTUALIZAR',
		'caption'=>'ACTUALIZAR',
		'onclick'=>'js: function(e){e.preventDefault();editResofcontratovaf()}',
		)
);
?>

<br><br>
<div id="div_resofcontratovaf" class="box"> 
</div>
<br>

