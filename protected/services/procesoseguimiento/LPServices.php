<?php
Yii::import('application.services.procesoseguimiento.ControlseguimientoServices');
class L1Services extends ControlseguimientoServices{

	public function asignarEtapas($model){
		
		$model_aj = new Aj;
		$model_aj->controlseguimiento_id=$model->id;
		$model_aj->save(false);
		
		$model_dp = new Directorproyecto;
		$model_dp->controlseguimiento_id=$model->id;
		$model_dp->save(false);
		
		$model_oc = new Oficioconductor;
		$model_oc->controlseguimiento_id=$model->id;
		$model_oc->tipo="L";
		$model_oc->save(false);
		
		$model_ro = new Resolucionof;
		$model_ro->controlseguimiento_id=$model->id;
		$model_ro->tipo="VAF";
		$model_ro->save(false);
		
		$model_se = new Secretaria;
		$model_se->controlseguimiento_id=$model->id;
		$model_se->tipo="RESOFLEP";
		$model_se->save(false);
		
		$model_con = new Contraloria;
		$model_con->controlseguimiento_id=$model->id;
		$model_con->tipo="LEP";
		$model_con->save(false);
		
		$model_pub = new Publicacion;
		$model_pub->controlseguimiento_id=$model->id;
		$model_pub->save(false);
		
		$model_efe = new Envinformeseva;
		$model_efe->controlseguimiento_id=$model->id;
		$model_efe->save(false);
		
		$model_oc = new Oficioconductor;
		$model_oc->controlseguimiento_id=$model->id;
		$model_oc->tipo="ADODES";
		$model_oc->save(false);
		
		$model_radodes = new Resolucionadodes;
		$model_radodes->controlseguimiento_id=$model->id;
		$model_radodes->tipo="LP";
		$model_radodes->save(false);
		
		
		$model_ce = new Comisionevaluacion;
		$model_ce->controlseguimiento_id=$model->id;		
		$model_ce->save(false);
		
		$model_vaf = new Vaf;
		$model_vaf->controlseguimiento_id=$model->id;
		$model_vaf->save(false);
		
		$model_se = new Secretaria;
		$model_se->controlseguimiento_id=$model->id;
		$model_se->tipo="RESADODES";
		$model_se->save(false);
		
		$model_con = new Contraloria;
		$model_con->controlseguimiento_id=$model->id;
		$model_con->tipo="FIRMARESADODES";
		$model_con->save(false);
		
		$model_riup = new Recinformacionsup;
		$model_riup->controlseguimiento_id=$model->id;
		$model_riup->tipo
		$model_riup->save(false);
		
		/*
		$model_ = new ;
		$model_->controlseguimiento_id=$model->id;
		$model_->save(false);
		*/
	}
	public function cargarEtapas($model){
	
	return $model;
	}

}