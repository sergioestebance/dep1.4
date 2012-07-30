<?php

Yii::import('application.services.procesoseguimiento.ControlseguimientoServices');
Yii::import('application.services.procesoseguimiento.L1Services');
Yii::import('application.services.procesoseguimiento.LEServices');
Yii::import('application.services.procesoseguimiento.LPServices');
Yii::import('application.services.procesoseguimiento.TDServices');

class ControlseguimientoController extends GxController {

	private $CSService;
	
	
	function init(){
	$this->CSService = new L1Services();
    }

	public function filters() {
		return array(
				'rights', 
				);
	}

	public function actionView($id) {
		$this->render('view', array(
			'model' => $this->loadModel($id, 'Controlseguimiento'),
		));
	}
	
	public function actionViewRendicion($id) {
		$model = $this->loadModel($id, 'Controlseguimiento');
		
		$this->render('viewRendicion', array(
			'model' => $model,
			'plantilla' => $model->plantilla,
		));
	}
	
	
	/*ACTION QUE PERMITE CREAR UN CONTROL DE SEGUIMIENTO A TRAVES DE LA GRILLA DE ADMINSEG*/
	
	public function actionCreaCS($id){
	
		$model = new Controlseguimiento;
		$model_procesocompra = $this->loadModel($id, 'Procesocompra');
		
		$model->procesocompra_id= $model_procesocompra->id;
		$model->tipo = $model_procesocompra->sigla;
		$model->save(false);
		
		$ServiceName=$model->tipo.'Services';
		$this->CSService= new $ServiceName;		
		$this->CSService->asignarEtapas($model);
			
		$this->redirect(array('view', 'id' => $model->id));
	
	}
	
	
	
	
	public function actionCreate() {
		$model = new Controlseguimiento;


		if (isset($_POST['Controlseguimiento'])) {
			$model->setAttributes($_POST['Controlseguimiento']);

			if ($model->save()) {
				if (Yii::app()->getRequest()->getIsAjaxRequest())
					Yii::app()->end();
				else
					$this->redirect(array('view', 'id' => $model->id));
			}
		}

		$this->render('create', array( 'model' => $model));
	}

	public function actionUpdate($id) {
		$model = $this->loadModel($id, 'Controlseguimiento');


		if (isset($_POST['Controlseguimiento'])) {
			$model->setAttributes($_POST['Controlseguimiento']);

			if ($model->save()) {
				$this->redirect(array('view', 'id' => $model->id));
			}
		}

		$this->render('update', array(
				'model' => $model,
				));
	}

	public function actionDelete($id) {
		if (Yii::app()->getRequest()->getIsPostRequest()) {
			$this->loadModel($id, 'Controlseguimiento')->delete();

			if (!Yii::app()->getRequest()->getIsAjaxRequest())
				$this->redirect(array('admin'));
		} else
			throw new CHttpException(400, Yii::t('app', 'Your request is invalid.'));
	}

	public function actionIndex() {
		$dataProvider = new CActiveDataProvider('Controlseguimiento');
		$this->render('index', array(
			'dataProvider' => $dataProvider,
		));
	}

	public function actionAdmin() {
		$model = new Controlseguimiento('search');
		$model->unsetAttributes();

		if (isset($_GET['Controlseguimiento']))
			$model->setAttributes($_GET['Controlseguimiento']);

		$this->render('admin', array(
			'model' => $model,
		));
	}
	
	public function actionAdminRendicion() {
		$model = new Controlseguimiento('search');
		$model->unsetAttributes();

		if (isset($_GET['Controlseguimiento']))
			$model->setAttributes($_GET['Controlseguimiento']);

		$this->render('adminRendicion', array(
			'model' => $model,
		));
	}

}