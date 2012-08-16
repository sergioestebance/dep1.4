<?php

class EnviobaseController extends GxController {

public function filters() {
	return array(
			'rights', 
			);
}

	public function actionView($id) {
		$this->render('view', array(
			'model' => $this->loadModel($id, 'Enviobase'),
		));
	}

	public function actionCrear($id){
		$model = new Enviobase;
		$model_pc = $this->loadModel($id, 'Procesocompra');
		Yii::app()->clientScript->scriptMap['jquery.js'] = false;
		
		if (Yii::app()->request->isAjaxRequest)
        {
			if($model_pc->estado!="ACTIVO"){
				echo CJSON::encode(array('status'=>'failure', 'div'=>'EL PROCESO DE COMPRA NO ESTA ACTIVO'));
				exit;               
			}
        }
		
		if (isset($_POST['Enviobase'])){
			$model->setAttributes($_POST['Enviobase']);
			
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
            echo CJSON::encode(array('status'=>'failure', 'div'=>$this->renderPartial('_crear', array('model' => $model,'model_pc' => $model_pc),true,true)));
            exit;               
        }
	}
	public function actionCreate() {
		$model = new Enviobase;


		if (isset($_POST['Enviobase'])) {
			$model->setAttributes($_POST['Enviobase']);

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
		$model = $this->loadModel($id, 'Enviobase');


		if (isset($_POST['Enviobase'])) {
			$model->setAttributes($_POST['Enviobase']);

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
			$this->loadModel($id, 'Enviobase')->delete();

			if (!Yii::app()->getRequest()->getIsAjaxRequest())
				$this->redirect(array('admin'));
		} else
			throw new CHttpException(400, Yii::t('app', 'Your request is invalid.'));
	}

	public function actionIndex() {
		$dataProvider = new CActiveDataProvider('Enviobase');
		$this->render('index', array(
			'dataProvider' => $dataProvider,
		));
	}

	public function actionAdmin() {
		$model = new Enviobase('search');
		$model->unsetAttributes();

		if (isset($_GET['Enviobase']))
			$model->setAttributes($_GET['Enviobase']);

		$this->render('admin', array(
			'model' => $model,
		));
	}

}