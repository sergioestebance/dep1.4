<?php

class RecinformacionsupController extends GxController {

public function filters() {
	return array(
			'rights', 
			);
}

	public function actionView($id) {
		$this->render('view', array(
			'model' => $this->loadModel($id, 'Recinformacionsup'),
		));
	}

	public function actionCreate() {
		$model = new Recinformacionsup;


		if (isset($_POST['Recinformacionsup'])) {
			$model->setAttributes($_POST['Recinformacionsup']);

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
		$model = $this->loadModel($id, 'Recinformacionsup');


		if (isset($_POST['Recinformacionsup'])) {
			$model->setAttributes($_POST['Recinformacionsup']);

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
			$this->loadModel($id, 'Recinformacionsup')->delete();

			if (!Yii::app()->getRequest()->getIsAjaxRequest())
				$this->redirect(array('admin'));
		} else
			throw new CHttpException(400, Yii::t('app', 'Your request is invalid.'));
	}

	public function actionIndex() {
		$dataProvider = new CActiveDataProvider('Recinformacionsup');
		$this->render('index', array(
			'dataProvider' => $dataProvider,
		));
	}

	public function actionAdmin() {
		$model = new Recinformacionsup('search');
		$model->unsetAttributes();

		if (isset($_GET['Recinformacionsup']))
			$model->setAttributes($_GET['Recinformacionsup']);

		$this->render('admin', array(
			'model' => $model,
		));
	}

}