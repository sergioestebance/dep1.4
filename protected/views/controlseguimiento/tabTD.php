<?php 		
		$this->widget('zii.widgets.jui.CJuiTabs', array(
			'id'=> 'tabs_etapas',
			'tabs' => array(
				'Asesor juridico' => array('id' => 0,'content' => $this->renderPartial('//aj/ver_aj', array('model' => $model,),$this),),
				'Secretaria' => array( 'id' => 1,'content' => $this->renderPartial('//secretaria/ver_secretaria_resofl1', array('model' => $model->secretarias[0],),$this),),
				'Contraloria' => array('id' => 2,'content' => $this->renderPartial('//contraloria/ver_contraloria', array('model' => $model->contralorias[0],),$this),),
				'Publicacion' => array('id' => 3,'content' => 'TEST',),
				
				if($UTM>100){
					'Recopilacion informacion' => array('id' => 4,'content' => 'TEST',),
					'Abogada secretaria' => array('id' => 5,'content' => 'TEST',),
					'Envio contrato firma' => array('id' => 6,'content' => 'TEST',),
					'Resof contrato VAF' => array('id' => 7,'content' => 'TEST',),
					'Resof contrato secr' => array('id' => 8,'content' => 'TEST',),
					'Resof contrato cont' => array('id' => 9,'content' => 'TEST',),
				}
				
				else{
					'Resolucion oficializacion' => array('id' => 3,'content' => $this->renderPartial('//resolucionof/ver_resolucionof', array('model' => $model->resolucionof,),$this),),
					'Resof contrato secr' => array('id' => 4,'content' => 'TEST',),
					'Resof contrato cont' => array('id' => 5,'content' => 'TEST',),
				}
				
			),
				
			'options' => array(
				'collapsible' => false,
				),
			
		));
?>