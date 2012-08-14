<?php 		
		$this->widget('zii.widgets.jui.CJuiTabs', array(
			'id'=> 'tabs_etapas',
			'tabs' => array(
				'Asesor juridico' => array('id' => 0,'content' => $this->renderPartial('//aj/ver_aj', array('model' => $model,),$this),),
				'Director de proyecto' => array('id' => 1,'ajax' => $this->createUrl('/directorproyecto/create'),),
				'Oficio conductor' => array('id' => 2,'content' => 'TEST',),
				'Resolucion oficializacion' => array('id' => 3,'content' => 'TEST',),
				'Secretaria' => array('id' => 4,'content' => 'TEST',),
				'Contraloria' => array('id' => 5,'content' => 'TEST',),
				'Publicacion' => array('id' => 6,'content' => 'TEST',),
				'Envio informes a evaluacion' => array('id' => 7,'content' => 'TEST',),
				'Oficio conductor AoD' => array('id' => 8,'content' => 'TEST',),
				'Comision evaluacion' => array('id' => 9,'content' => 'TEST',),
				'VAF' => array('id' => 10,'content' => 'TEST',),
				'Secretaria resAoD' => array('id' => 11,'content' => 'TEST',),
				'Contraloria firma resAoD' => array('id' => 12,'content' => 'TEST',),
				'Adjudicacion' => array('id' => 13,'content' => 'TEST',),
				'Recopilacion informacion supervisor' => array('id' => 14,'content' => 'TEST',),
				'Asesor juridico contrato' => array('id' => 15,'content' => 'TEST',),
				'Abogada secretaria' => array('id' => 16,'content' => 'TEST',),
				'Envio contrato firma' => array('id' => 17,'content' => 'TEST',),
				'Resof contrato vaf' => array('id' => 18,'content' => 'TEST',),
				'Resof contrato secretaria' => array('id' => 19,'content' => 'TEST',),
				'Resof contrato contraloria' => array('id' => 20,'content' => 'TEST',),
				
				
			),
				
			'options' => array(
				'collapsible' => false,
				),
			
		));
?>