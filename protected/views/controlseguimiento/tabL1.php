	
		<?php $this->widget('bootstrap.widgets.BootTabbable', array(
			'id'=> 'tabs_etapas',
			'type'=>'tabs',
			'placement'=>'left', // 'above', 'right', 'below' or 'left'
			'tabs' => array(
				 array('label'=>'Asesor juridico', 'id' => 0,'content' => $this->renderPartial('//aj/ver_aj', array('model' => $model,),$this),'active'=>true),
				 array('label'=>'Director de proyecto' , 'id' => 1,'ajax' => $this->createUrl('/directorproyecto/create'),),
				 array('label'=>'Oficio conductor', 'id' => 2,'content' => 'TEST',),
				 array('label'=>'Resolucion oficializacion', 'id' => 3,'content' => 'TEST',),
				 array('label'=>'Secretaria', 'id' => 4,'content' => 'TEST',),
				 array('label'=>'Contraloria', 'id' => 5,'content' => 'TEST',),
				 array('label'=>'Publicacion', 'id' => 6,'content' => 'TEST',),
				 array('label'=>'Proceso de evaluacion', 'id' => 7,'content' => 'TEST',),
				 array('label'=>'Oficio conductor', 'id' => 8,'content' => 'TEST',),
				 array('label'=>'Resolucion ADODES', 'id' => 9,'content' => 'TEST',),
				 array('label'=>'Secretaria', 'id' => 10,'content' => 'TEST',),
				 array('label'=>'Contraloria', 'id' => 11,'content' => 'TEST',),
				 array('label'=>'Resolucion oficializada', 'id' => 12,'content' => 'TEST',),
				 array('label'=>'Adjudicacion', 'id' => 13,'content' => 'TEST',),
			),
			
		));
?>
