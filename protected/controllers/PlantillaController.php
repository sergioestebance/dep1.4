<?php

class PlantillaController extends GxController {

public function filters() {
	return array(
			'rights', 
			);
}

	public function actionView($id) {
		$this->render('view', array(
			'model' => $this->loadModel($id, 'Plantilla'),
		));
	}

	
	public function actionViewRendicion($id) {
		$this->render('viewRendicion', array(
			'model' => $this->loadModel($id, 'Plantilla'),
		));
	}


	
	public function actionCrear($id){
		$model = new Plantilla;
		$model_pg = $this->loadModel($id, 'Procesogasto');
		$model_subitem = $this->loadModel($model_pg->subitem_id, 'Subitem');
		
		if (isset($_POST['Plantilla'])){
			$model->setAttributes($_POST['Plantilla']);
			$model->procesogasto_id=$id;
			$model->proyecto_id=$model_pg->subitem->proyecto->id;
			$model->item_id=$model_pg->subitem->item->id;

			
			if ($model->save(true)){
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
            echo CJSON::encode(array('status'=>'failure', 'div'=>$this->renderPartial('_crear', array('model' => $model,'buttons' => 'create'),true)));
            exit;               
        }
	}	
	
	public function actionCreate() {
		$model = new Plantilla;


		if (isset($_POST['Plantilla'])) {
			$model->setAttributes($_POST['Plantilla']);

			if ($model->save()) {
				if (Yii::app()->getRequest()->getIsAjaxRequest())
					Yii::app()->end();
				else
					$this->redirect(array('view', 'id' => $model->id));
			}
		}

		$this->render('create', array( 'model' => $model));
	}

	public function actionCrearRendicion($id) {
	
		$model = new Plantilla;
		$model_controlseguimiento = $this->loadModel ($id, 'Controlseguimiento');
		$model_procesocompra = $this->loadModel ($model_controlseguimiento->procesocompra_id,'Procesocompra');
		$model_subitem = $this->loadModel ($model_procesocompra->subitem_id,'Subitem'); 
		
		$model->controlseguimiento_id = $model_controlseguimiento->id;
		$model->item_id = $model_subitem->item_id;

		if (isset($_POST['Plantilla'])) {
			$model->setAttributes($_POST['Plantilla']);

			if ($model->save()) {
				if (Yii::app()->getRequest()->getIsAjaxRequest())
					Yii::app()->end();
				else
					$this->redirect(array('viewRendicion', 'id' => $model->id));
			}
		}

		$this->render('crearRendicion', array( 'model' => $model,
											   'model_subitem' => $model_subitem,));
	}


	public function actionUpdate($id) {
		$model = $this->loadModel($id, 'Plantilla');


		if (isset($_POST['Plantilla'])) {
			$model->setAttributes($_POST['Plantilla']);

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
			$this->loadModel($id, 'Plantilla')->delete();

			if (!Yii::app()->getRequest()->getIsAjaxRequest())
				$this->redirect(array('admin'));
		} else
			throw new CHttpException(400, Yii::t('app', 'Your request is invalid.'));
	}

	public function actionIndex() {
		$dataProvider = new CActiveDataProvider('Plantilla');
		$this->render('index', array(
			'dataProvider' => $dataProvider,
		));
	}

	public function actionAdmin() {
		$model = new Plantilla('search');
		$model->unsetAttributes();

		if (isset($_GET['Plantilla']))
			$model->setAttributes($_GET['Plantilla']);

		$this->render('admin', array(
			'model' => $model,
		));
	}

}