	
		<?php 
		$this->widget('zii.widgets.jui.CJuiTabs', array(
			'id'=> 'tabs_etapas',
			'tabs' => array(
				'Asesor juridico' => array('id' => 0,'content' => $this->renderPartial('//aj/ver_aj', array('model' => $model,),$this),),
				'Director de proyecto' => array('id' => 1,'ajax' => $this->createUrl('/directorproyecto/create'),),
				'Oficio conductor' => array('id' => 2,'content' => 'TEST',),
				'Resolucion oficializacion' => array('id' => 3,'content' => 'TEST',),
				'Secretaria' => array( 'id' => 4,'content' => 'TEST',),
				'Contraloria' => array('id' => 5,'content' => 'TEST',),
				'Publicacion' => array('id' => 6,'content' => 'TEST',),
				'Proceso de evaluacion' => array( 'id' => 7,'content' => 'TEST',),
				'Oficio conductor' => array('id' => 8,'content' => 'TEST',),
				'Resolucion ADODES' => array('id' => 9,'content' => 'TEST',),
				'Secretaria' => array( 'id' => 10,'content' => 'TEST',),
				'Contraloria' => array('id' => 11,'content' => 'TEST',),
				'Resolucion oficializada' => array( 'id' => 12,'content' => 'TEST',),
				'Adjudicacion' => array('id' => 13,'content' => 'TEST',),
			),
				
			'options' => array(
				'collapsible' => false,
				),
			
		));
?>