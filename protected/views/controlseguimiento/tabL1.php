	
		<?php 
		$this->widget('zii.widgets.jui.CJuiTabs', array(
			'id'=> 'tabs_etapas',
			'tabs' => array(
				'Asesor juridico' => array('id' => 0,'content' => $this->renderPartial('//aj/ver_aj', array('model' => $model,),$this),),
				'Director de proyecto' => array('id' => 1,'content' => $this->renderPartial('//directorproyecto/ver_dp', array('model' => $model,),$this),),
				'Oficio conductor' => array('id' => 2,'content' =>  $this->renderPartial('//oficioconductor/ver_ocL', array('model' => $model->oficioconductors[0],),$this),),
				'Resolucion oficializacion' => array('id' => 3,'content' => $this->renderPartial('//resolucionof/ver_resolucionof', array('model' => $model->resolucionof,),$this),),
				'Secretaria' => array( 'id' => 4,'content' => $this->renderPartial('//secretaria/ver_secretaria_resofl1', array('model' => $model->secretarias[0],),$this),),
				'Contraloria' => array('id' => 5,'content' => $this->renderPartial('//contraloria/ver_contraloria', array('model' => $model->contralorias[0],),$this),),
				'Publicacion' => array('id' => 6,'content' => $this->renderPartial('//publicacion/ver_publicacion', array('model' => $model->publicacion,),$this),),
				'Proceso de evaluacion' => array( 'id' => 7,'content' => $this->renderPartial('//procesoevaluacion/ver_procesoevaluacion', array('model' => $model->procesoevaluacion,),$this),),
				'Oficio conductor ADODES' => array('id' => 8,'content' => $this->renderPartial('//oficioconductor/ver_ocADODES', array('model' => $model->oficioconductors[1],),$this),),
				'Resolucion ADODES' => array('id' => 9,'content' => $this->renderPartial('//resolucionadodes/ver_resolucionadode', array('model' => $model->resolucionadode,),$this),),
				'Secretaria ADODES' => array( 'id' => 10,'content' => $this->renderPartial('//secretaria/ver_secretaria_resadodes', array('model' => $model->secretarias[1],),$this),),
				'Contraloria ADODES' => array('id' => 11,'content' => $this->renderPartial('//contraloria/ver_contraloria_adodes', array('model' => $model->contralorias[1],),$this),),
				'Resolucion oficializada' => array( 'id' => 12,'content' => $this->renderPartial('//resolucionoficializada/ver_resolucionoficializada', array('model' => $model->resolucionoficializada,),$this),),
				'Adjudicacion' => array('id' => 13,'content' => $this->renderPartial('//adjudicacion/ver_adjudicacion', array('model' => $model->adjudicacion,),$this),),
			),
				
			'options' => array(
				'collapsible' => false,
				),
			
		));

?>

