<?php

class PeticionetController extends GxController {

public function filters() {
	return array(
			'rights', 
			);
}

	public function actionView($id) {
		$this->render('view', array(
			'model' => $this->loadModel($id, 'Peticionet'),
		));
	}
	
	
	public function actionCrear($id){
	
		$model_peticionet = new Peticionet;
		$model_pc = $this->loadModel($id, 'Procesocompra');	
		
		if (Yii::app()->request->isAjaxRequest)
        {
			if($model_pc->estado!="ACTIVO"){
				echo CJSON::encode(array('status'=>'failure', 'div'=>'EL PROCESO DE COMPRA NO ESTA ACTIVO'));
				exit;               
			}
        }
		
		if (isset($_POST['Peticionet'])){
			$model_peticionet->setAttributes($_POST['Peticionet']);

			if ($model_peticionet->save()) {
				
				if (Yii::app()->request->isAjaxRequest){
				Yii::app()->user->setFlash('success', "Creación Exitosa");
                    echo CJSON::encode(array(
                        'status'=>'success', 
                        'div'=>"LISTA",
                        ));
                    exit;               
                }else
					$this->redirect(array('view', 'id' => $model_peticionet->id));
			}
		}
		
		 if (Yii::app()->request->isAjaxRequest)
        {
            echo CJSON::encode(array('status'=>'failure', 'div'=>$this->renderPartial('_crear', array('model' => $model_peticionet,'model_pc' => $model_pc,'buttons' => 'create'),true,true)));
            exit;               
        }
		
	}

	public function actionCreate($id) {
		$model_peticionet = new Peticionet;
		$model_pc = $this->loadModel($id, 'Procesocompra');		

		//SE REALIZA LUEGO DEL GUARDAR
		if (isset($_POST['Peticionet'])){
			$model_peticionet->setAttributes($_POST['Peticionet']);
			if ($model_peticionet->save()) {
					$this->redirect(array('view', 'id' => $model_peticionet->id));
			}
		}
			$this->render('create', array( 'model_peticionet' => $model_peticionet,'model_pc'=>$model_pc));
		
	}

	public function actionUpdate($id) {
		$model = $this->loadModel($id, 'Peticionet');


		if (isset($_POST['Peticionet'])) {
			$model->setAttributes($_POST['Peticionet']);

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
			$this->loadModel($id, 'Peticionet')->delete();

			if (!Yii::app()->getRequest()->getIsAjaxRequest())
				$this->redirect(array('admin'));
		} else
			throw new CHttpException(400, Yii::t('app', 'Your request is invalid.'));
	}

	public function actionIndex() {
		$dataProvider = new CActiveDataProvider('Peticionet');
		$this->render('index', array(
			'dataProvider' => $dataProvider,
		));
	}

	public function actionAdmin() {
		$model = new Peticionet('search');
		$model->unsetAttributes();

		if (isset($_GET['Peticionet']))
			$model->setAttributes($_GET['Peticionet']);

		$this->render('admin', array(
			'model' => $model,
		));
	}

}