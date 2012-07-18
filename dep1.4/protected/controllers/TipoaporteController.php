<?php

class TipoaporteController extends GxController {

public function filters() {
	return array(
			'rights', 
			);
}

	public function actionView($id) {
		$this->render('view', array(
			'model' => $this->loadModel($id, 'Tipoaporte'),
		));
	}

	public function actionCreate() {
		$model = new Tipoaporte;


		if (isset($_POST['Tipoaporte'])) {
			$model->setAttributes($_POST['Tipoaporte']);

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
		$model = $this->loadModel($id, 'Tipoaporte');


		if (isset($_POST['Tipoaporte'])) {
			$model->setAttributes($_POST['Tipoaporte']);

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
			$this->loadModel($id, 'Tipoaporte')->delete();

			if (!Yii::app()->getRequest()->getIsAjaxRequest())
				$this->redirect(array('admin'));
		} else
			throw new CHttpException(400, Yii::t('app', 'Your request is invalid.'));
	}

	public function actionIndex() {
		$dataProvider = new CActiveDataProvider('Tipoaporte');
		$this->render('index', array(
			'dataProvider' => $dataProvider,
		));
	}

	public function actionAdmin() {
		$model = new Tipoaporte('search');
		$model->unsetAttributes();

		if (isset($_GET['Tipoaporte']))
			$model->setAttributes($_GET['Tipoaporte']);

		$this->render('admin', array(
			'model' => $model,
		));
	}

}