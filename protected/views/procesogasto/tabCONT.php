<?php 		
		$this->widget('zii.widgets.jui.CJuiTabs', array(
			'id'=> 'tabs_etapas',
			'tabs' => array(
				'Constacias' => array('id' => 0,'content' => $this->renderPartial('//constancia/ver_constancias', array('model_pc' => $model,),$this),),
				),
				
			'options' => array(
				'collapsible' => false,
				),
			
		));
?>