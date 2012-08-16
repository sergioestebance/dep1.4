<?php 		
		$this->widget('bootstrap.widgets.BootTabbable', array(
			'type'=>'tabs',
			'placement'=>'left', // 'above', 'right', 'below' or 'left'
			'tabs'=>array(
				array('label'=>'Asesor juridico','id' => 0,'content' => $this->renderPartial('//aj/ver_aj', array('model' => $model,),$this),'active'=>true),
				array('label'=>'Director de proyecto','id' => 1,'content' => $this->renderPartial('//directorproyecto/ver_dp', array('model' => $model,),$this),),
				array('label'=>'Oficio conductor' ,'id' => 2,'content' =>  $this->renderPartial('//oficioconductor/ver_ocL', array('model' => $model->oficioconductors[0],),$this),),
				array('label'=>'Resolucion oficializacion','id' => 3,'content' => $this->renderPartial('//resolucionof/ver_resolucionof', array('model' => $model->resolucionof,),$this),),
				array('label'=>'Secretaria', 'id' => 4,'content' => $this->renderPartial('//secretaria/ver_secretaria_resofl1', array('model' => $model->secretarias[0],),$this),),
				array('label'=>'Contraloria' ,'id' => 5,'content' => $this->renderPartial('//contraloria/ver_contraloria', array('model' => $model->contralorias[0],),$this),),
				array('label'=>'Publicacion' ,'id' => 6,'content' => $this->renderPartial('//publicacion/ver_publicacion', array('model' => $model->publicacion,),$this),),
				array('label'=>'Envio informes a evaluacion','id' => 7,'content' => 'TEST',),
				array('label'=>'Oficio conductor AOD','id' => 8,'content' => $this->renderPartial('//oficioconductor/ver_ocADODES', array('model' => $model->oficioconductors[1],),$this),),
				array('label'=>'Comision evaluacion' ,'id' => 9,'content' => 'TEST',),
				array('label'=>'Resolucion AOD','id' => 10,'content' => $this->renderPartial('//resolucionadodes/ver_resolucionadode', array('model' => $model->resolucionadode,),$this),),
				array('label'=>'VAF','id' => 11,'content' => 'TEST',),
				array('label'=>'Secretaria RES AOD', 'id' => 12,'content' => $this->renderPartial('//secretaria/ver_secretaria_resadodes', array('model' => $model->secretarias[1],),$this),),
				array('label'=>'Contraloria FIRMA AOD','id' => 13,'content' => $this->renderPartial('//contraloria/ver_contraloria_adodes', array('model' => $model->contralorias[1],),$this),),
				array('label'=>'Recopilacion informacion supervisor','id' => 14,'content' => 'TEST',),
				array('label'=>'Abogada secretaria','id' => 15,'content' => 'TEST',),
				array('label'=>'Envio contrato firma','id' => 16,'content' => 'TEST',),
				array('label'=>'Resof contrato VAF' ,'id' => 17,'content' => 'TEST',),
				array('label'=>'Resof contrato secr' ,'id' => 18,'content' => 'TEST',),
				array('label'=>'Resof contrato cont','id' => 19,'content' => 'TEST',),
			),
)); ?>