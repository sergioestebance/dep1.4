<?php 
		$this->widget('bootstrap.widgets.BootTabbable', array(
			'type'=>'tabs',
			'placement'=>'above', 
			'tabs'=>array(
				array('label'=>'Honorario','id' => 0,'content' => $this->renderPartial('//honorario/ver_honorarios', array('model_pc' => $model,),$this),'active'=>true),
				array('label'=>'Plantilla' ,'id' => 1,'content' => $this->renderPartial('//plantilla/ver_plantillas', array('model_pc' => $model,),$this),),
				),
)); ?>