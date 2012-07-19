<?php

class CentrocostoController extends GxController {

public function filters() {
	return array(
			'rights', 
			);
}

	public function actionView($id) {
		$this->render('view', array(
			'model' => $this->loadModel($id, 'Centrocosto'),
		));
	}

	public function actionCreate() {
		$model = new Centrocosto;


		if (isset($_POST['Centrocosto'])) {
			$model->setAttributes($_POST['Centrocosto']);

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
		$model = $this->loadModel($id, 'Centrocosto');


		if (isset($_POST['Centrocosto'])) {
			$model->setAttributes($_POST['Centrocosto']);

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
			$this->loadModel($id, 'Centrocosto')->delete();

			if (!Yii::app()->getRequest()->getIsAjaxRequest())
				$this->redirect(array('admin'));
		} else
			throw new CHttpException(400, Yii::t('app', 'Your request is invalid.'));
	}

	public function actionIndex() {
		$dataProvider = new CActiveDataProvider('Centrocosto');
		$this->render('index', array(
			'dataProvider' => $dataProvider,
		));
	}

	public function actionAdmin() {
		$model = new Centrocosto('search');
		$model->unsetAttributes();

		if (isset($_GET['Centrocosto']))
			$model->setAttributes($_GET['Centrocosto']);

		$this->render('admin', array(
			'model' => $model,
		));
	}

}