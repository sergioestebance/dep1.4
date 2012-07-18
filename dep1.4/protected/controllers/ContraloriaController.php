<?php

class ContraloriaController extends GxController {

public function filters() {
	return array(
			'rights', 
			);
}

	public function actionView($id) {
		$this->render('view', array(
			'model' => $this->loadModel($id, 'Contraloria'),
		));
	}

	public function actionCreate() {
		$model = new Contraloria;


		if (isset($_POST['Contraloria'])) {
			$model->setAttributes($_POST['Contraloria']);

			if ($model->save()) {
				if (Yii::app()->getRequest()->getIsAjaxRequest())
					Yii::app()->end();
				else
					$this->redirect(array('view', 'id' => $model->idcontraloria));
			}
		}

		$this->render('create', array( 'model' => $model));
	}

	public function actionUpdate($id) {
		$model = $this->loadModel($id, 'Contraloria');


		if (isset($_POST['Contraloria'])) {
			$model->setAttributes($_POST['Contraloria']);

			if ($model->save()) {
				$this->redirect(array('view', 'id' => $model->idcontraloria));
			}
		}

		$this->render('update', array(
				'model' => $model,
				));
	}

	public function actionDelete($id) {
		if (Yii::app()->getRequest()->getIsPostRequest()) {
			$this->loadModel($id, 'Contraloria')->delete();

			if (!Yii::app()->getRequest()->getIsAjaxRequest())
				$this->redirect(array('admin'));
		} else
			throw new CHttpException(400, Yii::t('app', 'Your request is invalid.'));
	}

	public function actionIndex() {
		$dataProvider = new CActiveDataProvider('Contraloria');
		$this->render('index', array(
			'dataProvider' => $dataProvider,
		));
	}

	public function actionAdmin() {
		$model = new Contraloria('search');
		$model->unsetAttributes();

		if (isset($_GET['Contraloria']))
			$model->setAttributes($_GET['Contraloria']);

		$this->render('admin', array(
			'model' => $model,
		));
	}

}