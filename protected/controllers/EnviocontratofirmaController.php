<?php

class EnviocontratofirmaController extends GxController {

public function filters() {
	return array(
			'rights', 
			);
}

	public function actionView($id) {
		$this->render('view', array(
			'model' => $this->loadModel($id, 'Enviocontratofirma'),
		));
	}

	public function actionCreate() {
		$model = new Enviocontratofirma;


		if (isset($_POST['Enviocontratofirma'])) {
			$model->setAttributes($_POST['Enviocontratofirma']);

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
		$model = $this->loadModel($id, 'Enviocontratofirma');


		if (isset($_POST['Enviocontratofirma'])) {
			$model->setAttributes($_POST['Enviocontratofirma']);

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
			$this->loadModel($id, 'Enviocontratofirma')->delete();

			if (!Yii::app()->getRequest()->getIsAjaxRequest())
				$this->redirect(array('admin'));
		} else
			throw new CHttpException(400, Yii::t('app', 'Your request is invalid.'));
	}

	public function actionIndex() {
		$dataProvider = new CActiveDataProvider('Enviocontratofirma');
		$this->render('index', array(
			'dataProvider' => $dataProvider,
		));
	}

	public function actionAdmin() {
		$model = new Enviocontratofirma('search');
		$model->unsetAttributes();

		if (isset($_GET['Enviocontratofirma']))
			$model->setAttributes($_GET['Enviocontratofirma']);

		$this->render('admin', array(
			'model' => $model,
		));
	}

}