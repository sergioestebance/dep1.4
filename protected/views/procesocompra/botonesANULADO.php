<div style="text-align: right;">
		<?php
$this->beginWidget('zii.widgets.jui.CJuiButton', array(
    'buttonType'=>'buttonset',
    'name'=>'my-set',
));
$this->widget('zii.widgets.jui.CJuiButton', array(
    'buttonType'=>'link',
    'name'=>'boton_anular',
    'caption'=>'Anular',
	'value'=>'Anulado',
	'url'=>Yii::app()->createUrl("procesocompra/activar", array("id"=>$id)),
    'options'=>array('icons'=>'js:{primary:"ui-icon-newwin"}'),
    
));

$this->endWidget();
?>

</div>