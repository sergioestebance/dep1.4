<?php

class ProyectoController extends GxController {

public function filters() {
	return array(
			'rights', 
			);
}

	public function actionView($id) {
	
		$model = $this->loadModel($id, 'Proyecto');
		$model_subitems = new CArrayDataProvider($model->subitems,array());
		$model_subitems->setPagination(false);
		

		$this->render('view', array(
			'model' => $model,
			'model_subitems'=> $model_subitems,
		));

	}
	
	public function actionExport ($id){
	
		$model = $this->loadModel($id, 'Proyecto');
		
		Yii::app()->request->sendFile('proyecto'.$model->codigoProyecto.'.xls', 		
			$this->renderPartial('excel', array(
			'model' => $model,
			),true) 
		);	
	}
	
	public function actionViewProyectoPc($id) {
		$this->layout="";
		$this->render('viewProyectoPc', array(
			'model' => $this->loadModel($id, 'Proyecto'),
		));
	}
	
	public function actionViewCompleto($id) {
		$this->render('viewCompleto', array(
			'model' => $this->loadModel($id, 'Proyecto'),
		));
	}
	
	public function actionViewCompletoPc($id) {
		$this->render('viewCompletoPc', array(
			'model' => $this->loadModel($id, 'Proyecto'),
		));
	}

	public function actionCreate() {
		$model = new Proyecto;


		if (isset($_POST['Proyecto'])) {
			$model->setAttributes($_POST['Proyecto']);

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
		$model = $this->loadModel($id, 'Proyecto');


		if (isset($_POST['Proyecto'])) {
			$model->setAttributes($_POST['Proyecto']);

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
			$this->loadModel($id, 'Proyecto')->delete();

			if (!Yii::app()->getRequest()->getIsAjaxRequest())
				$this->redirect(array('admin'));
		} else
			throw new CHttpException(400, Yii::t('app', 'Your request is invalid.'));
	}

	public function actionIndex() {
		$dataProvider = new CActiveDataProvider('Proyecto');
		$this->render('index', array(
			'dataProvider' => $dataProvider,
		));
	}

	public function actionAdmin() {
		$model = new Proyecto('search');
		$model->unsetAttributes();

		if (isset($_GET['Proyecto']))
			$model->setAttributes($_GET['Proyecto']);

		$this->render('admin', array(
			'model' => $model,
		));
	}
	
	public function actionAdminProyectoPc() {
		$model = new Proyecto('search');
		$model->unsetAttributes();

		if (isset($_GET['Proyecto']))
			$model->setAttributes($_GET['Proyecto']);

		$this->render('adminProyectoPc', array(
			'model' => $model,
		));
	}

}