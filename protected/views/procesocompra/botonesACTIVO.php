<div style="text-align: right;">
		<?php
$this->beginWidget('zii.widgets.jui.CJuiButton', array(
    'buttonType'=>'buttonset',
    'name'=>'my-set',
));

$this->widget('zii.widgets.jui.CJuiButton', array(
    'buttonType'=>'button',
    'name'=>'btnStop',
    'caption'=>'Anular',
    'options'=>array('icons'=>'js:{primary:"ui-icon-newwin"}'),
    'onclick'=>'js:function(){alert("Button Stop clicked."); this.blur(); return false;}',
));
$this->widget('zii.widgets.jui.CJuiButton', array(
    'buttonType'=>'button',
    'name'=>'btnGo',
    'caption'=>'Finalizar',
    'options'=>array('icons'=>'js:{primary:"ui-icon-newwin"}'),
    'onclick'=>'js:function(){alert("Button Go clicked."); $("#btnGo").hide(); return false;}',
));
$this->endWidget();
?>
</div>
		