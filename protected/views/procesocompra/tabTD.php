<?php 
		$this->widget('bootstrap.widgets.BootTabbable', array(
			'type'=>'tabs',
			'placement'=>'above', // 'above', 'right', 'below' or 'left'
			'tabs'=>array(
				array('label'=>'Peticion ET' ,'id' => 0,'content' => $this->renderPartial('//peticionet/ver_peticiones', array('model_pc' => $model,),$this),'active'=>true),
				array('label'=>'Ingreso ET' ,'id' => 1,'content' => $this->renderPartial('//et/ver_et', array('model' => $model,),$this),),
				array('label'=>'Elaboracion trato directo' ,'id' => 2,'content' => $this->renderPartial("//procesocompra/_formTD", array('model' => $model), $this),'id' => 2	),
				array('label'=>'Solicitud Compra' ,'id' => 3,'content' => $this->renderPartial("//solicitudcompra/ver_solicitudes", array('model_pc' => $model,), $this),'id' => 3),
				array('label'=>'Envio Base' ,'id' => 4,'content' => $this->renderPartial("//enviobase/ver_enviobases", array('model_pc' => $model), $this), 'id' => 4),
				array('label'=>'Adquisicion' ,'id' => 5,'content' => $this->renderPartial("//adquisicion/ver_adquisiciones", array('model_pc' => $model), $this), 'id' => 5,),
			),
)); ?>

