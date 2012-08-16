	
		<?php 
		$this->widget('bootstrap.widgets.BootTabbable', array(
			'type'=>'tabs',
			'placement'=>'left', // 'above', 'right', 'below' or 'left'
			'tabs'=>array(
				array('label'=>'Asesor juridico','id' => 0,'content' => $this->renderPartial('//aj/ver_aj', array('model' => $model,),$this),'active'=>true),
				array('label'=>'Director de proyecto','id' => 1,'content' => $this->renderPartial('//directorproyecto/ver_dp', array('model' => $model,),$this),),
				array('label'=>'Oficio conductor','id' => 2,'content' =>  $this->renderPartial('//oficioconductor/ver_oc', array('model' => $model->oficioconductors[0],),$this),),
				array('label'=>'Resolucion oficializacion' ,'id' => 3,'content' => $this->renderPartial('//resolucionof/ver_resolucionof', array('model' => $model->resolucionof,),$this),),
				array('label'=>'Secretaria','id' => 4,'content' => $this->renderPartial('//secretaria/ver_secretaria_resofl1', array('model' => $model->secretarias[0],),$this),),
				array('label'=>'Contraloria' ,'id' => 5,'content' => $this->renderPartial('//contraloria/ver_contraloria', array('model' => $model->contralorias[0],),$this),),
				array('label'=>'Publicacion' ,'id' => 6,'content' => $this->renderPartial('//publicacion/ver_publicacion', array('model' => $model->publicacion,),$this),),
				array('label'=>'Proceso de evaluacion' , 'id' => 7,'content' => $this->renderPartial('//procesoevaluacion/ver_procesoevaluacion', array('model' => $model->procesoevaluacion,),$this),),
				array('label'=>'Oficio conductor AOD','id' => 8,'content' => $this->renderPartial('//oficioconductor/ver_ocADODES', array('model' => $model->oficioconductors[1],),$this),),
				array('label'=>'Resolucion AOD','id' => 9,'content' => $this->renderPartial('//resolucionadodes/ver_resolucionadode', array('model' => $model->resolucionadode,),$this),),
				array('label'=>'Secretaria RES AOD', 'id' => 10,'content' => $this->renderPartial('//secretaria/ver_secretaria_resadodes', array('model' => $model->secretarias[1],),$this),),
				array('label'=>'Contraloria FIRMA AOD','id' => 11,'content' => $this->renderPartial('//contraloria/ver_contraloria_adodes', array('model' => $model->contralorias[1],),$this),),
				array('label'=>'Resolucion oficializada', 'id' => 12,'content' => $this->renderPartial('//resolucionoficializada/ver_resolucionoficializada', array('model' => $model->resolucionoficializada,),$this),),
				array('label'=>'Adjudicacion','id' => 13,'content' => $this->renderPartial('//adjudicacion/ver_adjudicacion', array('model' => $model->adjudicacion,),$this),),
			  ),
)); ?>

