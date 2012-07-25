<div style="text-align: right;">
		<?php
$this->beginWidget('zii.widgets.jui.CJuiButton', array(
    'buttonType'=>'buttonset',
    'name'=>'my-set',
));
$this->widget('zii.widgets.jui.CJuiButton', array(
    'buttonType'=>'link',
    'name'=>'boton_activar',
    'caption'=>'Activar',
	'value'=>'Activado',
	'url'=>Yii::app()->createUrl("procesocompra/activar", array("id"=>$model->id)),
    'options'=>array('icons'=>'js:{primary:"ui-icon-newwin"}'),
    
));

$this->endWidget();
?>

</div>