<div style="text-align: right;">
		<?php
$this->beginWidget('zii.widgets.jui.CJuiButton', array(
    'buttonType'=>'buttonset',
    'name'=>'my-set',
));
$this->widget('zii.widgets.jui.CJuiButton', array(
    'buttonType'=>'link',
    'name'=>'btnStop',
    'caption'=>'Anular',
	'value'=>'Anulado',
	'url'=>Yii::app()->createUrl("procesocompra/anular", array("id"=>$model->id)),
    'options'=>array('icons'=>'js:{primary:"ui-icon-newwin"}'),
    //'onclick'=>'js:function(){alert("Button Stop clicked."); this.blur(); return false;}',
));


$this->endWidget();
?>
</div>
		