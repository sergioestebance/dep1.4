<?php 
		$this->widget('bootstrap.widgets.BootTabbable', array(
			'type'=>'tabs',
			'placement'=>'above', // 'above', 'right', 'below' or 'left'
			'tabs'=>array(
				array('label'=>'Peticion ET' ,'id' => 0,'content' => $this->renderPartial('//peticionet/ver_peticiones', array('model_pc' => $model,),$this),'active'=>true),
				array('label'=>'Ingreso ET' ,'id' => 1,'content' => $this->renderPartial('//et/ver_et', array('model' => $model,),$this),),
				array('label'=>'Solicitud Compra' ,'id' => 2,'content' => $this->renderPartial("//solicitudcompra/ver_solicitudes", array('model_pc' => $model,), $this),'id' => 2),
			),
)); ?>