<?php

class AsesorjuridicoController extends GxController {

public function filters() {
	return array(
			'rights', 
			);
}

	public function actionView($id) {
		$this->render('view', array(
			'model' => $this->loadModel($id, 'Asesorjuridico'),
		));
	}

	public function actionCreate() {
		$model = new Asesorjuridico;


		if (isset($_POST['Asesorjuridico'])) {
			$model->setAttributes($_POST['Asesorjuridico']);

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
		$model = $this->loadModel($id, 'Asesorjuridico');


		if (isset($_POST['Asesorjuridico'])) {
			$model->setAttributes($_POST['Asesorjuridico']);

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
			$this->loadModel($id, 'Asesorjuridico')->delete();

			if (!Yii::app()->getRequest()->getIsAjaxRequest())
				$this->redirect(array('admin'));
		} else
			throw new CHttpException(400, Yii::t('app', 'Your request is invalid.'));
	}

	public function actionIndex() {
		$dataProvider = new CActiveDataProvider('Asesorjuridico');
		$this->render('index', array(
			'dataProvider' => $dataProvider,
		));
	}

	public function actionAdmin() {
		$model = new Asesorjuridico('search');
		$model->unsetAttributes();

		if (isset($_GET['Asesorjuridico']))
			$model->setAttributes($_GET['Asesorjuridico']);

		$this->render('admin', array(
			'model' => $model,
		));
	}

}