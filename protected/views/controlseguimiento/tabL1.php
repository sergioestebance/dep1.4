	
		<?php 
		$this->widget('zii.widgets.jui.CJuiTabs', array(
			'id'=> 'tabs_etapas',
			'tabs' => array(
				'Asesor juridico' => array('id' => 0,'content' => $this->renderPartial('//aj/ver_aj', array('model' => $model,),$this),),
				'Director de proyecto' => array('id' => 1,'content' => $this->renderPartial('//directorproyecto/ver_dp', array('model' => $model,),$this),),
				'Oficio conductor' => array('id' => 2,'content' =>  $this->renderPartial('//oficioconductor/ver_ocL', array('model' => $model->oficioconductors[0],),$this),),
				'Resolucion oficializacion' => array('id' => 3,'content' => 'TEST',),
				'Secretaria' => array( 'id' => 4,'content' => $this->renderPartial('//secretaria/ver_secretaria_resofl1', array('model' => $model->secretarias[0],),$this),),
				'Contraloria' => array('id' => 5,'content' => 'TEST',),
				'Publicacion' => array('id' => 6,'content' => 'TEST',),
				'Proceso de evaluacion' => array( 'id' => 7,'content' => 'TEST',),
				'Oficio conductor ADODES' => array('id' => 8,'content' => $this->renderPartial('//oficioconductor/ver_ocADODES', array('model' => $model->oficioconductors[1],),$this),),
				'Resolucion ADODES' => array('id' => 9,'content' => 'TEST',),
				'Secretaria RESADODES' => array( 'id' => 10,'content' => $this->renderPartial('//secretaria/ver_secretaria_resadodes', array('model' => $model->secretarias[1],),$this),),
				'Contraloria' => array('id' => 11,'content' => 'TEST',),
				'Resolucion oficializada' => array( 'id' => 12,'content' => $this->renderPartial('//resolucionoficializada/ver_resolucionoficializada', array('model' => $model->resolucionoficializada,),$this),),
				'Adjudicacion' => array('id' => 13,'content' => $this->renderPartial('//adjudicacion/ver_adjudicacion', array('model' => $model->adjudicacion,),$this),),
			),
				
			'options' => array(
				'collapsible' => false,
				),
			
		));

?>

