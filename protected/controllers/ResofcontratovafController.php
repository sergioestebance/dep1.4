<?php

class ResofcontratovafController extends GxController {

public function filters() {
	return array(
			'rights', 
			);
}

	public function actionView($id) {
		$this->render('view', array(
			'model' => $this->loadModel($id, 'Resofcontratovaf'),
		));
	}

	public function actionEditar($id){
		$model = $this->loadModel($id, 'Resofcontratovaf');
		
		if (Yii::app()->request->isAjaxRequest)
        {
			if($model->controlseguimiento->procesocompra->estado!="FINALIZADO"){
				echo CJSON::encode(array('status'=>'failure', 'div'=>'EL PROCESO DE COMPRA NO EST&Atilde; FINALIZADO'));
				exit;               
			}
        }
			
		if (isset($_POST['Resofcontratovaf'])) {
			$model->setAttributes($_POST['Resofcontratovaf']);
			
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
		$model = new Resofcontratovaf;


		if (isset($_POST['Resofcontratovaf'])) {
			$model->setAttributes($_POST['Resofcontratovaf']);

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
		$model = $this->loadModel($id, 'Resofcontratovaf');


		if (isset($_POST['Resofcontratovaf'])) {
			$model->setAttributes($_POST['Resofcontratovaf']);

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
			$this->loadModel($id, 'Resofcontratovaf')->delete();

			if (!Yii::app()->getRequest()->getIsAjaxRequest())
				$this->redirect(array('admin'));
		} else
			throw new CHttpException(400, Yii::t('app', 'Your request is invalid.'));
	}

	public function actionIndex() {
		$dataProvider = new CActiveDataProvider('Resofcontratovaf');
		$this->render('index', array(
			'dataProvider' => $dataProvider,
		));
	}

	public function actionAdmin() {
		$model = new Resofcontratovaf('search');
		$model->unsetAttributes();

		if (isset($_GET['Resofcontratovaf']))
			$model->setAttributes($_GET['Resofcontratovaf']);

		$this->render('admin', array(
			'model' => $model,
		));
	}

}