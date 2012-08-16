<?php 
		$this->widget('bootstrap.widgets.BootTabbable', array(
			'type'=>'tabs',
			'placement'=>'above', 
			'tabs'=>array(
				array('label'=>'Peticion ET','content' => $this->renderPartial('//peticionet/ver_peticiones', array('model_pc' => $model,),$this),'id' => 0,'active'=>true),
				array('label'=>'Ingreso ET','content' => $this->renderPartial('//et/ver_et', array('model' => $model,),$this),'id' => 1,),
				array('label'=>'Base Licitacion' ,'content' => $this->renderPartial("//procesocompra/_formBL", array('model' => $model), $this),'id' => 2	),
				array('label'=>'Solicitud Compra','content' => $this->renderPartial("//solicitudcompra/ver_solicitudes", array('model_pc' => $model,), $this),'id' => 3),
				array('label'=>'Envio Base' ,'content' => $this->renderPartial("//enviobase/ver_enviobases", array('model_pc' => $model), $this), 'id' => 4),
				array('label'=>'Adquisicion' ,'content' => $this->renderPartial("//adquisicion/ver_adquisiciones", array('model_pc' => $model), $this), 'id' => 5,),
			),
)); ?>

