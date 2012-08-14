<?php

class ResofcontratoController extends GxController {

public function filters() {
	return array(
			'rights', 
			);
}

	public function actionView($id) {
		$this->render('view', array(
			'model' => $this->loadModel($id, 'Resofcontrato'),
		));
	}

	public function actionEditar($id){
		$model = $this->loadModel($id, 'Resofcontrato');
		
		if (Yii::app()->request->isAjaxRequest)
        {
			if($model->controlseguimiento->procesocompra->estado!="FINALIZADO"){
				echo CJSON::encode(array('status'=>'failure', 'div'=>'EL PROCESO DE COMPRA NO ESTA FINALIZADO'));
				exit;               
			}
        }
			
		if (isset($_POST['Resofcontrato'])) {
			$model->setAttributes($_POST['Resofcontrato']);
			
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
            echo CJSON::encode(array('status'=>'failure', 'div'=>$this->renderPartial('_crear', array('model' => $model,),true,true)));
            exit;               
        }
	}
	
	public function actionCreate() {
		$model = new Resofcontrato;


		if (isset($_POST['Resofcontrato'])) {
			$model->setAttributes($_POST['Resofcontrato']);

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
		$model = $this->loadModel($id, 'Resofcontrato');


		if (isset($_POST['Resofcontrato'])) {
			$model->setAttributes($_POST['Resofcontrato']);

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
			$this->loadModel($id, 'Resofcontrato')->delete();

			if (!Yii::app()->getRequest()->getIsAjaxRequest())
				$this->redirect(array('admin'));
		} else
			throw new CHttpException(400, Yii::t('app', 'Your request is invalid.'));
	}

	public function actionIndex() {
		$dataProvider = new CActiveDataProvider('Resofcontrato');
		$this->render('index', array(
			'dataProvider' => $dataProvider,
		));
	}

	public function actionAdmin() {
		$model = new Resofcontrato('search');
		$model->unsetAttributes();

		if (isset($_GET['Resofcontrato']))
			$model->setAttributes($_GET['Resofcontrato']);

		$this->render('admin', array(
			'model' => $model,
		));
	}

}