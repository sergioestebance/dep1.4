<?php 		
		$this->widget('zii.widgets.jui.CJuiTabs', array(
			'id'=> 'tabs_etapas',
			'tabs' => array(
				'Honorario' => array('id' => 0,'content' => $this->renderPartial('//honorario/ver_honorarios', array('model_pc' => $model,),$this),),
				'Plantilla' => array('id' => 1,'content' => $this->renderPartial('//plantilla/ver_plantillas', array('model_pc' => $model,),$this),),
				),
				
			'options' => array(
				'collapsible' => false,
				),
			
		));
?>