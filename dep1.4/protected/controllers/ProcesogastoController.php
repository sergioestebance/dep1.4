<?php

class ProcesogastoController extends GxController {

public function filters() {
	return array(
			'rights', 
			);
}

	public function actionView($id) {
		$this->render('view', array(
			'model' => $this->loadModel($id, 'Procesogasto'),
		));
	}

	public function actionViewSeg($id) {
		$this->render('viewSeg', array(
			'model' => $this->loadModel($id, 'Procesogasto'),
		));
	}
	
	public function actionCreaPG($id) {
		$model = new Procesogasto;
		
		if(isset($_POST['Procesogasto']))
		{
			$model->attributes=$_POST['Procesogasto'];	
			$model->subitem_id=$id;
				
			if ($model->save(true)){				
				$this->redirect(array('view', 'id' => $model->id));
			}		
		}
		
		if(Yii::app()->request->isAjaxRequest)
		{
			echo CJSON::encode(array('_form'=>$this->renderPartial('_crearpg', array('model' => $model,'model_subitem'=>$this->loadModel($id, 'Subitem')),true,true),));
			exit;
		}
	}		
	
	public function actionCreate() {
		$model = new Procesogasto;


		if (isset($_POST['Procesogasto'])) {
			$model->setAttributes($_POST['Procesogasto']);

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
		$model = $this->loadModel($id, 'Procesogasto');


		if (isset($_POST['Procesogasto'])) {
			$model->setAttributes($_POST['Procesogasto']);

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
			$this->loadModel($id, 'Procesogasto')->delete();

			if (!Yii::app()->getRequest()->getIsAjaxRequest())
				$this->redirect(array('admin'));
		} else
			throw new CHttpException(400, Yii::t('app', 'Your request is invalid.'));
	}

	public function actionIndex() {
		$dataProvider = new CActiveDataProvider('Procesogasto');
		$this->render('index', array(
			'dataProvider' => $dataProvider,
		));
	}

	public function actionAdmin() {
		$model = new Procesogasto('search');
		$model->unsetAttributes();

		if (isset($_GET['Procesogasto']))
			$model->setAttributes($_GET['Procesogasto']);

		$this->render('admin', array(
			'model' => $model,
		));
	}
	
	public function actionAdminSeg() {
		$model = new Procesogasto('search');
		$model->unsetAttributes();

		if (isset($_GET['Procesogasto']))
			$model->setAttributes($_GET['Procesogasto']);

		$this->render('adminSeg', array(
			'model' => $model,
		));
	}

}