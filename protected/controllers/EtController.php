<?php

class EtController extends GxController {

public function filters() {
	return array(
			'rights', 
			);
}

	public function actionView($id) {
		$this->render('view', array(
			'model' => $this->loadModel($id, 'Et'),
		));
	}

	public function actionCreate() {
		$model = new Et;


		if (isset($_POST['Et'])) {
			$model->setAttributes($_POST['Et']);

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
		$model = $this->loadModel($id, 'Et');


		if (isset($_POST['Et'])) {
			$model->setAttributes($_POST['Et']);

			if ($model->save()) {
				$this->redirect(array('view', 'id' => $model->id));
			}
		}

		$this->render('update', array(
				'model' => $model,
				));
	}

		public function actionEditar($id){
		$model = $this->loadModel($id, 'Et');
		
		if (Yii::app()->request->isAjaxRequest)
        {
			if($model->procesocompra->estado!="ACTIVO"){
				echo CJSON::encode(array('status'=>'failure', 'div'=>'EL PROCESO DE COMPRA NO ESTA ACTIVO'));
				exit;               
			}
        }
		
		if (isset($_POST['Et'])) {
			$model->setAttributes($_POST['Et']);
			
			if ($model->save()) {
				if (Yii::app()->request->isAjaxRequest){
				        echo CJSON::encode(array(
                        'status'=>'success', 
                        'div'=>"LISTA",
                        ));
                    exit;               
                }
			}			
		}		
		if (Yii::app()->request->isAjaxRequest)
        {
            echo CJSON::encode(array('status'=>'failure', 'div'=>$this->renderPartial('_crear', array('model' => $model),true, true)));
            exit;               
        }
	}
	
	
	public function actionDelete($id) {
		if (Yii::app()->getRequest()->getIsPostRequest()) {
			$this->loadModel($id, 'Et')->delete();

			if (!Yii::app()->getRequest()->getIsAjaxRequest())
				$this->redirect(array('admin'));
		} else
			throw new CHttpException(400, Yii::t('app', 'Your request is invalid.'));
	}

	public function actionIndex() {
		$dataProvider = new CActiveDataProvider('Et');
		$this->render('index', array(
			'dataProvider' => $dataProvider,
		));
	}

	public function actionAdmin() {
		$model = new Et('search');
		$model->unsetAttributes();

		if (isset($_GET['Et']))
			$model->setAttributes($_GET['Et']);

		$this->render('admin', array(
			'model' => $model,
		));
	}

}