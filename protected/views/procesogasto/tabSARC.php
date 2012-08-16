<?php 
		$this->widget('bootstrap.widgets.BootTabbable', array(
			'type'=>'tabs',
			'placement'=>'above', 
			'tabs'=>array(
				array('label'=>'Plantilla','id' => 0,'content' => $this->renderPartial('//plantilla/ver_plantillas', array('model_pc' => $model,),$this),'active'=>true),
				),
)); ?>