<?php

class SubitemController extends GxController {

public function filters() {
	return array(
			'rights', 
			);
}

	public function actionView($id) {
		$this->render('view', array(
			'model' => $this->loadModel($id, 'Subitem'),
		));
	}

	public function actionViewP($id) {
		$model = $this->loadModel($id, 'Subitem');
		$model_pc = new CArrayDataProvider($model->procesocompras,array());
		$model_pc->setPagination(false);
		
		$model_pg = new CArrayDataProvider($model->procesogastos,array());
		$model_pg->setPagination(false);
		
		$this->render('viewP', array(
			'model' => $model,
			'model_pc' => $model_pc,
			'model_pg' => $model_pg,
		));
	}
	
	public function actionCreate() {
		$model = new Subitem;

		if (isset($_POST['Subitem'])) {
			$model->setAttributes($_POST['Subitem']);

			if ($model->save()) {
				if (Yii::app()->getRequest()->getIsAjaxRequest())
					Yii::app()->end();
				else{
					$model_proyecto = $this->loadModel($model->proyecto_id, 'Proyecto');

					$count = Subitem::model()->count("proyecto_id=:proyecto_id", array("proyecto_id"=>$model->proyecto_id));
					$model_item = $this->loadModel($model->item_id, 'Item');
					$model->codigo=$model_proyecto->codigoProyecto.$model_item->codigo.$count;
					$model->saldo=$model->montos;
					$model->save();
					$this->redirect(array('view', 'id' => $model->id));
					}
			}
		}

		$this->render('create', array( 'model' => $model, 'model_proyecto'=> $model_proyecto, 'contador'=>$count));
	}

	public function actionCreateProyecto($id) {
		$model = new Subitem;
		$model_proyecto = $this->loadModel($id, 'Proyecto');

		$count = Subitem::model()->count("proyecto_id=:proyecto_id", array("proyecto_id"=>$id));
		$count++;
				
		if (isset($_POST['Subitem'])) {
			$model->setAttributes($_POST['Subitem']);

			if ($model->save()) {
				if (Yii::app()->getRequest()->getIsAjaxRequest())
					Yii::app()->end();

				else{
					$model_item = $this->loadModel($model->item_id, 'Item');
					$model->codigo=$model_proyecto->codigoProyecto.$model_item->codigo.$count;
					$model->saldo=$model->montos;
					$model->save();
					$this->redirect(array('view', 'id' => $model->id));
					}
			}
		}

		$this->render('createProyecto', array( 'model' => $model, 'model_proyecto'=> $model_proyecto, 'contador'=>$count));
	}
	
	public function actionUpdate($id) {
		$model = $this->loadModel($id, 'Subitem');


		if (isset($_POST['Subitem'])) {
			$model->setAttributes($_POST['Subitem']);

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
			$this->loadModel($id, 'Subitem')->delete();

			if (!Yii::app()->getRequest()->getIsAjaxRequest())
				$this->redirect(array('admin'));
		} else
			throw new CHttpException(400, Yii::t('app', 'Your request is invalid.'));
	}

	public function actionIndex() {
		$dataProvider = new CActiveDataProvider('Subitem');
		$this->render('index', array(
			'dataProvider' => $dataProvider,
		));
	}

	public function actionAdmin() {
		$model = new Subitem('search');
		$model->unsetAttributes();

		if (isset($_GET['Subitem']))
			$model->setAttributes($_GET['Subitem']);

		$this->render('admin', array(
			'model' => $model,
		));
	}

}