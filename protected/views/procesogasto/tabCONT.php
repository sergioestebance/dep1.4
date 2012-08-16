<?php 
		$this->widget('bootstrap.widgets.BootTabbable', array(
			'type'=>'tabs',
			'placement'=>'above', 
			'tabs'=>array(
				array('label'=>'Constacias' ,'id' => 0,'content' => $this->renderPartial('//constancia/ver_constancias', array('model_pc' => $model,),$this),'active'=>true),
				),
)); ?>
