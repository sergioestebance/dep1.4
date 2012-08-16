<?php

class AdjudicacionController extends GxController {

public function filters() {
	return array(
			'rights', 
			);
}


	public function actionView($id) {
		$this->render('view', array(
			'model' => $this->loadModel($id, 'Adjudicacion'),
		));
	}

	public function actionEditar($id){
		$model = $this->loadModel($id, 'Adjudicacion');
		
		if (isset($_POST['Adjudicacion'])) {
			$model->setAttributes($_POST['Adjudicacion']);
			
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
	
	
	
	public function actionCreate() {
		$model = new Adjudicacion;


		if (isset($_POST['Adjudicacion'])) {
			$model->setAttributes($_POST['Adjudicacion']);

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
		$model = $this->loadModel($id, 'Adjudicacion');


		if (isset($_POST['Adjudicacion'])) {
			$model->setAttributes($_POST['Adjudicacion']);

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
			$this->loadModel($id, 'Adjudicacion')->delete();

			if (!Yii::app()->getRequest()->getIsAjaxRequest())
				$this->redirect(array('admin'));
		} else
			throw new CHttpException(400, Yii::t('app', 'Your request is invalid.'));
	}

	public function actionIndex() {
		$dataProvider = new CActiveDataProvider('Adjudicacion');
		$this->render('index', array(
			'dataProvider' => $dataProvider,
		));
	}

	public function actionAdmin() {
		$model = new Adjudicacion('search');
		$model->unsetAttributes();

		if (isset($_GET['Adjudicacion']))
			$model->setAttributes($_GET['Adjudicacion']);

		$this->render('admin', array(
			'model' => $model,
		));
	}

}