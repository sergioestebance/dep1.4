<?php 		
		$this->widget('bootstrap.widgets.BootTabbable', array(
			'type'=>'tabs',
			'placement'=>'left', // 'above', 'right', 'below' or 'left'
			'tabs'=>array(
				'Asesor Juridico' => array('id' => 0,'content' => $this->renderPartial('//aj/ver_aj', array('model' => $model,),$this),),
				'Secretaria' => array( 'id' => 1,'content' => $this->renderPartial('//secretaria/ver_secretaria_resofl1', array('model' => $model->secretarias[0],),$this),),
				'Contraloria' => array('id' => 2,'content' => $this->renderPartial('//contraloria/ver_contraloria', array('model' => $model->contralorias[0],),$this),),
				'Publicacion' => array('id' => 3,'content' => $this->renderPartial('//publicacion/ver_publicacion', array('model' => $model->publicacion,),$this),),
				
				if($UTM>100){
					'Recopilacion informacion' => array('id' => 4,'content' => $this->renderPartial('//recinformacionsup/ver_recinformacionsup', array('model' => $model->recinformacionsup,),$this),),
					'Abogada Secretaria' => array('id' => 5,'content' => $this->renderPartial('//abogadasecretaria/ver_abogadasecretaria', array('model' => $model->abogadasecretaria,),$this),),
					'Envio Contrato Firma' => array('id' => 6,'content' => $this->renderPartial('//enviocontratofirma/ver_enviocontratofirma', array('model' => $model->enviocontratofirma,),$this),),			
					'Resof Contrato VAF' => array('id' => 7,'content' => $this->renderPartial('//resofcontratovaf/ver_resofcontratovaf', array('model' => $model->resofcontratovaf,),$this),),			
					'Resof Contrato Secreataria' => array('id' => 8,'content' => $this->renderPartial('//resofcontrato/ver_resofcontrato_sec', array('model' => $model->resofcontratos[0],),$this),),
					'Resof Contrato Contraloria' => array('id' => 9,'content' => $this->renderPartial('//resofcontrato/ver_resofcontrato_con', array('model' => $model->resofcontratos[1],),$this),),
				}
				
				else{
					'Resolucion Oficializacion' => array('id' => 4,'content' => $this->renderPartial('//resolucionof/ver_resolucionof', array('model' => $model->resolucionof,),$this),),
					'Resof Contrato Secreataria' => array('id' => 5,'content' => $this->renderPartial('//resofcontrato/ver_resofcontrato_sec', array('model' => $model->resofcontratos[0],),$this),),
					'Resof Contrato Contraloria' => array('id' => 6,'content' => $this->renderPartial('//resofcontrato/ver_resofcontrato_con', array('model' => $model->resofcontratos[1],),$this),),
				}
				
		),
)); ?>