<?php

class Honorario1Controller extends GxController {

public function filters() {
	return array(
			'rights', 
			);
}

	public function actionView($id) {
		$this->render('view', array(
			'model' => $this->loadModel($id, 'Honorario1'),
		));
	}

	public function actionCreate() {
		$model = new Honorario1;


		if (isset($_POST['Honorario1'])) {
			$model->setAttributes($_POST['Honorario1']);

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
		$model = $this->loadModel($id, 'Honorario1');


		if (isset($_POST['Honorario1'])) {
			$model->setAttributes($_POST['Honorario1']);

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
			$this->loadModel($id, 'Honorario1')->delete();

			if (!Yii::app()->getRequest()->getIsAjaxRequest())
				$this->redirect(array('admin'));
		} else
			throw new CHttpException(400, Yii::t('app', 'Your request is invalid.'));
	}

	public function actionIndex() {
		$dataProvider = new CActiveDataProvider('Honorario1');
		$this->render('index', array(
			'dataProvider' => $dataProvider,
		));
	}

	public function actionAdmin() {
		$model = new Honorario1('search');
		$model->unsetAttributes();

		if (isset($_GET['Honorario1']))
			$model->setAttributes($_GET['Honorario1']);

		$this->render('admin', array(
			'model' => $model,
		));
	}

}