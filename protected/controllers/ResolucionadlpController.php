<?php

class ResolucionadlpController extends GxController {

public function filters() {
	return array(
			'rights', 
			);
}

	public function actionView($id) {
		$this->render('view', array(
			'model' => $this->loadModel($id, 'Resolucionadlp'),
		));
	}

	public function actionCreate() {
		$model = new Resolucionadlp;


		if (isset($_POST['Resolucionadlp'])) {
			$model->setAttributes($_POST['Resolucionadlp']);

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
		$model = $this->loadModel($id, 'Resolucionadlp');


		if (isset($_POST['Resolucionadlp'])) {
			$model->setAttributes($_POST['Resolucionadlp']);

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
			$this->loadModel($id, 'Resolucionadlp')->delete();

			if (!Yii::app()->getRequest()->getIsAjaxRequest())
				$this->redirect(array('admin'));
		} else
			throw new CHttpException(400, Yii::t('app', 'Your request is invalid.'));
	}

	public function actionIndex() {
		$dataProvider = new CActiveDataProvider('Resolucionadlp');
		$this->render('index', array(
			'dataProvider' => $dataProvider,
		));
	}

	public function actionAdmin() {
		$model = new Resolucionadlp('search');
		$model->unsetAttributes();

		if (isset($_GET['Resolucionadlp']))
			$model->setAttributes($_GET['Resolucionadlp']);

		$this->render('admin', array(
			'model' => $model,
		));
	}

}