<?php

class AjController extends GxController {

public function filters() {
	return array(
			'rights', 
			);
}


	public function actionEditar($id){
		$model = $this->loadModel($id, 'Aj');
				
		if (Yii::app()->request->isAjaxRequest)
        {
			if($model->controlseguimiento->procesocompra->estado!="FINALIZADO"){
				echo CJSON::encode(array('status'=>'failure', 'div'=>'EL PROCESO DE COMPRA NO ESTA FINALIZADO'));
				exit;               
			}
        }
			
		if (isset($_POST['Aj'])) {
			$model->setAttributes($_POST['Aj']);
			
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
            echo CJSON::encode(array('status'=>'failure', 'div'=>$this->renderPartial('_crear', array('model' => $model,),true)));
            exit;               
        }
	}

	public function actionView($id) {
		$this->render('view', array(
			'model' => $this->loadModel($id, 'Aj'),
		));
	}

	public function actionCreate() {
		$model = new Aj;


		if (isset($_POST['Aj'])) {
			$model->setAttributes($_POST['Aj']);

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
		$model = $this->loadModel($id, 'Aj');


		if (isset($_POST['Aj'])) {
			$model->setAttributes($_POST['Aj']);

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
			$this->loadModel($id, 'Aj')->delete();

			if (!Yii::app()->getRequest()->getIsAjaxRequest())
				$this->redirect(array('admin'));
		} else
			throw new CHttpException(400, Yii::t('app', 'Your request is invalid.'));
	}

	public function actionIndex() {
		$dataProvider = new CActiveDataProvider('Aj');
		$this->render('index', array(
			'dataProvider' => $dataProvider,
		));
	}

	public function actionAdmin() {
		$model = new Aj('search');
		$model->unsetAttributes();

		if (isset($_GET['Aj']))
			$model->setAttributes($_GET['Aj']);

		$this->render('admin', array(
			'model' => $model,
		));
	}

}