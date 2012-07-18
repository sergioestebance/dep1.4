<?php 		
		$this->widget('zii.widgets.jui.CJuiTabs', array(
			'id'=> 'tabs_etapas',
			'tabs' => array(
				'Peticion ET' => array('id' => 0,'content' => $this->renderPartial('//peticionet/ver_peticiones', array('model_pc' => $model,),$this),),
				'Ingreso ET' => array('id' => 1,'content' => $this->renderPartial('//et/ver_et', array('model' => $model,),$this),),
				'Base Licitacion' => array('content' => $this->renderPartial("//procesocompra/_formBL", array('model' => $model), $this),'id' => 2	),
				'Solicitud Compra' => array('content' => $this->renderPartial("//solicitudcompra/ver_solicitudes", array('model_pc' => $model,), $this),'id' => 3),
				'Envio Base' => array('content' => $this->renderPartial("//enviobase/ver_enviobases", array('model_pc' => $model), $this), 'id' => 4),
				'Adquisicion' => array('content' => $this->renderPartial("//adquisicion/ver_adquisiciones", array('model_pc' => $model), $this), 'id' => 5,),
			),
				
			'options' => array(
				'collapsible' => false,
				'selected'=>$model->estado,						
			),
			
		));
?>

