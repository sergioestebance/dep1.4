<?php 		
		$this->widget('zii.widgets.jui.CJuiTabs', array(
			'id'=> 'tabs_etapas',
			'tabs' => array(
				'Asesor juridico' => array('id' => 0,'content' => $this->renderPartial('//aj/ver_aj', array('model' => $model,),$this),),
				'Director de proyecto' => array('id' => 1,'content' => $this->renderPartial('//directorproyecto/ver_dp', array('model' => $model,),$this),),
				'Oficio conductor' => array('id' => 2,'content' =>  $this->renderPartial('//oficioconductor/ver_oc', array('model' => $model->oficioconductors[0],),$this),),
				'Resolucion oficializacion' => array('id' => 3,'content' => $this->renderPartial('//resolucionof/ver_resolucionof', array('model' => $model->resolucionof,),$this),),
				'Secretaria' => array( 'id' => 4,'content' => $this->renderPartial('//secretaria/ver_secretaria_resofl1', array('model' => $model->secretarias[0],),$this),),
				'Contraloria' => array('id' => 5,'content' => $this->renderPartial('//contraloria/ver_contraloria', array('model' => $model->contralorias[0],),$this),),
				'Publicacion' => array('id' => 6,'content' => $this->renderPartial('//publicacion/ver_publicacion', array('model' => $model->publicacion,),$this),),
				'Envio informes a evaluacion' => array('id' => 7,'content' => $this->renderPartial('//envinformeseva/ver_envinformeseva', array('model' => $model->envinformeseva,),$this),),
				'Oficio conductor AOD' => array('id' => 8,'content' => $this->renderPartial('//oficioconductor/ver_ocADODES', array('model' => $model->oficioconductors[1],),$this),),
				'Comision evaluacion' => array('id' => 9,'content' => $this->renderPartial('//comisionevaluacion/ver_comisionevaluacion', array('model' => $model->comisionevaluacion,),$this),),
				'VAF' => array('id' => 10,'content' => $this->renderPartial('//vaf/ver_vaf', array('model' => $model->vaf,),$this),),
				'Secretaria RES AOD' => array( 'id' => 11,'content' => $this->renderPartial('//secretaria/ver_secretaria_resadodes', array('model' => $model->secretarias[1],),$this),),
				'Contraloria FIRMA AOD' => array('id' => 12,'content' => $this->renderPartial('//contraloria/ver_contraloria_adodes', array('model' => $model->contralorias[1],),$this),),
				'Adjudicacion' => array('id' => 13,'content' => $this->renderPartial('//adjudicacion/ver_adjudicacion', array('model' => $model->adjudicacion,),$this),),
				'Recopilacion informacion supervisor' => array('id' => 14,'content' => $this->renderPartial('//recinformacionsup/ver_recinformacionsup', array('model' => $model->recinformacionsup,),$this),),
				'Asesor juridico contrato' => array('id' => 15,'content' => $this->renderPartial('//asesorjuridico/ver_asesorjuridico', array('model' => $model->asesorjuridico,),$this),),
				'Abogada secretaria' => array('id' => 16,'content' => 'TEST',),
				'Envio contrato firma' => array('id' => 17,'content' => 'TEST',),
				'Resof contrato VAF' => array('id' => 18,'content' => 'TEST',),				
				'Resof contrato secr' => array('id' => 19,'content' => 'TEST',),
				'Resof contrato cont' => array('id' => 20,'content' => 'TEST',),
				
				
			),
				
			'options' => array(
				'collapsible' => false,
				),
			
		));
?>