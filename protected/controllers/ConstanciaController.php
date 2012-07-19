<?php

class ConstanciaController extends GxController {

public function filters() {
	return array(
			'rights', 
			);
}

	public function actionCrear($id){
		$model = new Constancia;
		$model_pg = $this->loadModel($id, 'Procesogasto');
		
		if (isset($_POST['Constancia'])){
			$model->setAttributes($_POST['Constancia']);
			$model->procesogasto_id=$id;
			$model->proyecto_id=$model_pg->subitem->proyecto->id;

			
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
            echo CJSON::encode(array('status'=>'failure', 'div'=>$this->renderPartial('_crear', array('model' => $model,'model_pc' => $model_pc,'buttons' => 'create'),true)));
            exit;               
        }
	}



	public function actionView($id) {
		$this->render('view', array(
			'model' => $this->loadModel($id, 'Constancia'),
		));
	}

	public function actionCreate() {
		$model = new Constancia;


		if (isset($_POST['Constancia'])) {
			$model->setAttributes($_POST['Constancia']);

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
		$model = $this->loadModel($id, 'Constancia');


		if (isset($_POST['Constancia'])) {
			$model->setAttributes($_POST['Constancia']);

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
			$this->loadModel($id, 'Constancia')->delete();

			if (!Yii::app()->getRequest()->getIsAjaxRequest())
				$this->redirect(array('admin'));
		} else
			throw new CHttpException(400, Yii::t('app', 'Your request is invalid.'));
	}

	public function actionIndex() {
		$dataProvider = new CActiveDataProvider('Constancia');
		$this->render('index', array(
			'dataProvider' => $dataProvider,
		));
	}

	public function actionAdmin() {
		$model = new Constancia('search');
		$model->unsetAttributes();

		if (isset($_GET['Constancia']))
			$model->setAttributes($_GET['Constancia']);

		$this->render('admin', array(
			'model' => $model,
		));
	}

}