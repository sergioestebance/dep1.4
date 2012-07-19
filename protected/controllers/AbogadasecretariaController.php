<?php

class AbogadasecretariaController extends GxController {

public function filters() {
	return array(
			'rights', 
			);
}

	public function actionView($id) {
		$this->render('view', array(
			'model' => $this->loadModel($id, 'Abogadasecretaria'),
		));
	}

	public function actionCreate() {
		$model = new Abogadasecretaria;


		if (isset($_POST['Abogadasecretaria'])) {
			$model->setAttributes($_POST['Abogadasecretaria']);

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
		$model = $this->loadModel($id, 'Abogadasecretaria');


		if (isset($_POST['Abogadasecretaria'])) {
			$model->setAttributes($_POST['Abogadasecretaria']);

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
			$this->loadModel($id, 'Abogadasecretaria')->delete();

			if (!Yii::app()->getRequest()->getIsAjaxRequest())
				$this->redirect(array('admin'));
		} else
			throw new CHttpException(400, Yii::t('app', 'Your request is invalid.'));
	}

	public function actionIndex() {
		$dataProvider = new CActiveDataProvider('Abogadasecretaria');
		$this->render('index', array(
			'dataProvider' => $dataProvider,
		));
	}

	public function actionAdmin() {
		$model = new Abogadasecretaria('search');
		$model->unsetAttributes();

		if (isset($_GET['Abogadasecretaria']))
			$model->setAttributes($_GET['Abogadasecretaria']);

		$this->render('admin', array(
			'model' => $model,
		));
	}

}