<?php

class ComisionevaluacionController extends GxController {

public function filters() {
	return array(
			'rights', 
			);
}

	public function actionView($id) {
		$this->render('view', array(
			'model' => $this->loadModel($id, 'Comisionevaluacion'),
		));
	}

	public function actionCreate() {
		$model = new Comisionevaluacion;


		if (isset($_POST['Comisionevaluacion'])) {
			$model->setAttributes($_POST['Comisionevaluacion']);

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
		$model = $this->loadModel($id, 'Comisionevaluacion');


		if (isset($_POST['Comisionevaluacion'])) {
			$model->setAttributes($_POST['Comisionevaluacion']);

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
			$this->loadModel($id, 'Comisionevaluacion')->delete();

			if (!Yii::app()->getRequest()->getIsAjaxRequest())
				$this->redirect(array('admin'));
		} else
			throw new CHttpException(400, Yii::t('app', 'Your request is invalid.'));
	}

	public function actionIndex() {
		$dataProvider = new CActiveDataProvider('Comisionevaluacion');
		$this->render('index', array(
			'dataProvider' => $dataProvider,
		));
	}

	public function actionAdmin() {
		$model = new Comisionevaluacion('search');
		$model->unsetAttributes();

		if (isset($_GET['Comisionevaluacion']))
			$model->setAttributes($_GET['Comisionevaluacion']);

		$this->render('admin', array(
			'model' => $model,
		));
	}

}