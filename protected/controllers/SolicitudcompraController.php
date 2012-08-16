<?php
//ramiro escalante vidango
class SolicitudcompraController extends GxController {

public function filters() {
	return array(
			'rights', 
			);
}

	public function actionView($id) {
		$this->render('view', array(
			'model' => $this->loadModel($id, 'Solicitudcompra'),
		));
	}
	public function actionCrear($id){
		$model = new Solicitudcompra;
		$model_pc = $this->loadModel($id, 'Procesocompra');
		
		Yii::app()->clientScript->scriptMap['jquery.js'] = false;
		
		if (Yii::app()->request->isAjaxRequest)
        {
			if($model_pc->estado!="ACTIVO"){
				echo CJSON::encode(array('status'=>'failure', 'div'=>'EL PROCESO DE COMPRA NO ESTA ACTIVO'));
				exit;               
			}
        }
		
		if (isset($_POST['Solicitudcompra'])){
			$model->setAttributes($_POST['Solicitudcompra']);
			
			if ($model->save()){
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
            echo CJSON::encode(array('status'=>'failure', 'div'=>$this->renderPartial('_crear', array('model' => $model,'model_pc' => $model_pc),true, true)));
            exit;               
        }
	}
	
	public function actionCreate() {
		$model = new Solicitudcompra;


		if (isset($_POST['Solicitudcompra'])){
			$model->setAttributes($_POST['Solicitudcompra']);

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
		$model = $this->loadModel($id, 'Solicitudcompra');


		if (isset($_POST['Solicitudcompra'])) {
			$model->setAttributes($_POST['Solicitudcompra']);

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
			$this->loadModel($id, 'Solicitudcompra')->delete();

			if (!Yii::app()->getRequest()->getIsAjaxRequest())
				$this->redirect(array('admin'));
		} else
			throw new CHttpException(400, Yii::t('app', 'Your request is invalid.'));
	}

	public function actionIndex() {
		$dataProvider = new CActiveDataProvider('Solicitudcompra');
		$this->render('index', array(
			'dataProvider' => $dataProvider,
		));
	}

	public function actionAdmin() {
		$model = new Solicitudcompra('search');
		$model->unsetAttributes();

		if (isset($_GET['Solicitudcompra']))
			$model->setAttributes($_GET['Solicitudcompra']);

		$this->render('admin', array(
			'model' => $model,
		));
	}

}