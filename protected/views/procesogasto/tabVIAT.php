<?php 		
		$this->widget('zii.widgets.jui.CJuiTabs', array(
			'id'=> 'tabs_etapas',
			'tabs' => array(
				'Plantilla' => array('id' => 0,'content' => $this->renderPartial('//plantilla/ver_plantillas', array('model_pc' => $model,),$this),),
				),
				
			'options' => array(
				'collapsible' => false,
				),
			
		));
?>