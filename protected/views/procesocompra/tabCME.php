<?php 		
		$this->widget('zii.widgets.jui.CJuiTabs', array(
			'id'=> 'tabs_etapas',
			'tabs' => array(
				'Peticion ET' => array('id' => 0,'content' => $this->renderPartial('//peticionet/ver_peticiones', array('model_pc' => $model,),$this),),
				'Ingreso ET' => array('id' => 1,'content' => $this->renderPartial('//et/ver_et', array('model' => $model,),$this),),
				'Solicitud Compra' => array('content' => $this->renderPartial("//solicitudcompra/ver_solicitudes", array('model_pc' => $model,), $this),'id' => 2),
				
			),
				
			'options' => array(
				'collapsible' => false,
				),
			
		));
?>