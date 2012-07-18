<?php

class ResolucionoficializadaController extends GxController {

public function filters() {
	return array(
			'rights', 
			);
}

	public function actionView($id) {
		$this->render('view', array(
			'model' => $this->loadModel($id, 'Resolucionoficializada'),
		));
	}

	public function actionCreate() {
		$model = new Resolucionoficializada;


		if (isset($_POST['Resolucionoficializada'])) {
			$model->setAttributes($_POST['Resolucionoficializada']);

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
		$model = $this->loadModel($id, 'Resolucionoficializada');


		if (isset($_POST['Resolucionoficializada'])) {
			$model->setAttributes($_POST['Resolucionoficializada']);

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
			$this->loadModel($id, 'Resolucionoficializada')->delete();

			if (!Yii::app()->getRequest()->getIsAjaxRequest())
				$this->redirect(array('admin'));
		} else
			throw new CHttpException(400, Yii::t('app', 'Your request is invalid.'));
	}

	public function actionIndex() {
		$dataProvider = new CActiveDataProvider('Resolucionoficializada');
		$this->render('index', array(
			'dataProvider' => $dataProvider,
		));
	}

	public function actionAdmin() {
		$model = new Resolucionoficializada('search');
		$model->unsetAttributes();

		if (isset($_GET['Resolucionoficializada']))
			$model->setAttributes($_GET['Resolucionoficializada']);

		$this->render('admin', array(
			'model' => $model,
		));
	}

}