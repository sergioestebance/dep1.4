<?php

class HonorarioController extends GxController {

public function filters() {
	return array(
			'rights', 
			);
}

	public function actionView($id) {
		$this->render('view', array(
			'model' => $this->loadModel($id, 'Honorario'),
		));
	}

	public function actionCreate() {
		$model = new Honorario;


		if (isset($_POST['Honorario'])) {
			$model->setAttributes($_POST['Honorario']);

			if ($model->save()) {
				if (Yii::app()->getRequest()->getIsAjaxRequest())
					Yii::app()->end();
				else
					$this->redirect(array('view', 'id' => $model->id));
			}
		}

		$this->render('create', array( 'model' => $model));
	}

	
	public function actionCrear($id){
		$model = new Honorario;
		$model_pg = $this->loadModel($id, 'Procesogasto');
		
		if (isset($_POST['Honorario'])){
			$model->setAttributes($_POST['Honorario']);
			$model->procesogasto_id=$id;
		
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
	
	public function actionUpdate($id) {
		$model = $this->loadModel($id, 'Honorario');


		if (isset($_POST['Honorario'])) {
			$model->setAttributes($_POST['Honorario']);

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
			$this->loadModel($id, 'Honorario')->delete();

			if (!Yii::app()->getRequest()->getIsAjaxRequest())
				$this->redirect(array('admin'));
		} else
			throw new CHttpException(400, Yii::t('app', 'Your request is invalid.'));
	}

	public function actionIndex() {
		$dataProvider = new CActiveDataProvider('Honorario');
		$this->render('index', array(
			'dataProvider' => $dataProvider,
		));
	}

	public function actionAdmin() {
		$model = new Honorario('search');
		$model->unsetAttributes();

		if (isset($_GET['Honorario']))
			$model->setAttributes($_GET['Honorario']);

		$this->render('admin', array(
			'model' => $model,
		));
	}

}