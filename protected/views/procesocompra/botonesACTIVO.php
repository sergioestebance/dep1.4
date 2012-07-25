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
	'url'=>Yii::app()->createUrl("procesocompra/anular", array("id"=>$model->id)),
    'options'=>array('icons'=>'js:{primary:"ui-icon-newwin"}'),
    
));
$this->widget('zii.widgets.jui.CJuiButton', array(
    'buttonType'=>'link',
    'name'=>'boton_finalizar',
    'caption'=>'Finalizar',
	'value'=>'Finalizado',
	'url'=>Yii::app()->createUrl("procesocompra/finalizar", array("id"=>$model->id)),
    'options'=>array('icons'=>'js:{primary:"ui-icon-newwin"}'),
    
));
$this->endWidget();
?>
</div>
		