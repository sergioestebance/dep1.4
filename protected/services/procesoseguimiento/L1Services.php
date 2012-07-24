<?php
Yii::import('application.services.procesocompra.ProcesocompraServices');
class L1Services extends ControlseguimientoServices{

	public function asignarEtapas($id) {
		
		$model_aj = new Aj;
		$model_aj->procesocompra_id=$id;
		$model_aj->save(false);
	}
	public function cargarEtapas($model){
	
	return $model;
	}

}