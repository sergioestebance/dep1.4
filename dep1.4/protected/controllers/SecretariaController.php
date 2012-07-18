<?php

class SecretariaController extends GxController {

public function filters() {
	return array(
			'rights', 
			);
}

	public function actionView($id) {
		$this->render('view', array(
			'model' => $this->loadModel($id, 'Secretaria'),
		));
	}

	public function actionCreate() {
		$model = new Secretaria;


		if (isset($_POST['Secretaria'])) {
			$model->setAttributes($_POST['Secretaria']);

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
		$model = $this->loadModel($id, 'Secretaria');


		if (isset($_POST['Secretaria'])) {
			$model->setAttributes($_POST['Secretaria']);

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
			$this->loadModel($id, 'Secretaria')->delete();

			if (!Yii::app()->getRequest()->getIsAjaxRequest())
				$this->redirect(array('admin'));
		} else
			throw new CHttpException(400, Yii::t('app', 'Your request is invalid.'));
	}

	public function actionIndex() {
		$dataProvider = new CActiveDataProvider('Secretaria');
		$this->render('index', array(
			'dataProvider' => $dataProvider,
		));
	}

	public function actionAdmin() {
		$model = new Secretaria('search');
		$model->unsetAttributes();

		if (isset($_GET['Secretaria']))
			$model->setAttributes($_GET['Secretaria']);

		$this->render('admin', array(
			'model' => $model,
		));
	}

}