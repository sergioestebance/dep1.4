<?php

Yii::import('application.services.procesocompra.ProcesocompraServices');
Yii::import('application.services.procesocompra.L1EPServices');
Yii::import('application.services.procesocompra.CMEServices');
Yii::import('application.services.procesocompra.TDServices');

class ProcesocompraController extends GxController {

	private $PCService;

public function filters() {
	return array(
			'rights', 
			);
}

	public function actionEditarBL($id){
		$model = $this->loadModel($id, 'Procesocompra');
		
		if (Yii::app()->request->isAjaxRequest)
        {
			if($model->estado!="ACTIVO"){
				echo CJSON::encode(array('status'=>'failure', 'div'=>'EL PROCESO DE COMPRA NO ESTA ACTIVO'));
				exit;               
			}
        }
		
		if (isset($_POST['Procesocompra'])) {
			$model->setAttributes($_POST['Procesocompra']);
			
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
            echo CJSON::encode(array('status'=>'failure', 'div'=>$this->renderPartial('_bl', array('model' => $model,'buttons' => 'create'),true)));
            exit;               
        }
	}
	
	
		public function actionEditarTD($id){
		$model = $this->loadModel($id, 'Procesocompra');
		
		if (Yii::app()->request->isAjaxRequest)
        {
			if($model->estado!="ACTIVO"){
				echo CJSON::encode(array('status'=>'failure', 'div'=>'EL PROCESO DE COMPRA NO ESTA ACTIVO'));
				exit;               
			}
        }
		
		if (isset($_POST['Procesocompra'])) {
			$model->setAttributes($_POST['Procesocompra']);
			
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
            echo CJSON::encode(array('status'=>'failure', 'div'=>$this->renderPartial('_td', array('model' => $model,'buttons' => 'create'),true)));
            exit;               
        }
	}

	public function actionView($id) {
		$this->layout="";
		$model=$this->loadModel($id, 'Procesocompra');
		$this->render('view', array('model' => $model,));
	}
	
	public function actionAnular($id) {
		$this->layout="";
		$model=$this->loadModel($id, 'Procesocompra');
		$this->PCService->anularProceso($model);		
		$this->redirect(array('view', 'id' => $model->id));
	}
	
	public function actionActivar($id) {
		$this->layout="";
		$model=$this->loadModel($id, 'Procesocompra');
		$this->PCService->activarProceso($model);		
		$this->redirect(array('view', 'id' => $model->id));
	}
	
	public function actionFinalizar($id) {
		$this->layout="";
		$model=$this->loadModel($id, 'Procesocompra');
		$this->PCService->finalizarProceso($model);		
		$this->redirect(array('view', 'id' => $model->id));
	}
	
	public function actionViewSeg($id) {
		$this->render('viewSeg', array(
			'model' => $this->loadModel($id, 'Procesocompra'),
			));
	}
	
	function init(){
	$this->PCService = new L1EPServices();
    }

	public function actionCreaPC($id) {
		$model = new Procesocompra;
		if(isset($_POST['Procesocompra']))
		{
			$model->attributes=$_POST['Procesocompra'];	
			$model->subitem_id=$id;	
		
			if ($model->save(true)){	
				$this->PCService->asignarTipo($model);
				$ServiceName=$model->tipo.'Services';
				$this->PCService= new $ServiceName;		
				$this->PCService->asignarEtapas($model);		
				$this->redirect(array('view', 'id' => $model->id));
			}
		}
		
		if(Yii::app()->request->isAjaxRequest)
		{
			echo CJSON::encode(array('_form'=>$this->renderPartial('_form', array('model' => $model,'model_subitem'=>$this->loadModel($id, 'Subitem')),true,true),));
			exit;
		}
	}

	
	
	public function actionCreate($id) {
		$model = new Procesocompra;
		
		if (isset($_POST['Procesocompra'])) {
			$model->setAttributes($_POST['Procesocompra']);
			$model->subitem_id=$id;
			if ($model->save()) {
					$this->PCService->asignarTipo($model);
					$ServiceName=$model->tipo.'Services';
					$this->PCService= new $ServiceName;		
					$this->PCService->asignarEtapas($model);		
					$this->redirect(array('view', 'id' => $model->id));

			}
		}

		$this->render('create', array( 
		'model' => $model,
		'model_subitem' => $this->loadModel($id, 'Subitem'),
		));
	}

	public function actionUpdate($id) {
		$model = $this->loadModel($id, 'Procesocompra');


		if (isset($_POST['Procesocompra'])) {
			$model->setAttributes($_POST['Procesocompra']);

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
			$this->loadModel($id, 'Procesocompra')->delete();

			if (!Yii::app()->getRequest()->getIsAjaxRequest())
				$this->redirect(array('admin'));
		} else
			throw new CHttpException(400, Yii::t('app', 'Your request is invalid.'));
	}

	public function actionIndex() {
		$dataProvider = new CActiveDataProvider('Procesocompra');
		$this->render('index', array(
			'dataProvider' => $dataProvider,
		));
	}

	public function actionAdmin() {
		$model = new Procesocompra('search');
		$model->unsetAttributes();

		if (isset($_GET['Procesocompra']))
			$model->setAttributes($_GET['Procesocompra']);

		$this->render('admin', array(
			'model' => $model,
		));
	}
	
	public function actionAdminSeg() {
		$model = new Procesocompra('search');
		$model->unsetAttributes();

		if (isset($_GET['Procesocompra']))
			$model->setAttributes($_GET['Procesocompra']);

		$this->render('adminSeg', array(
			'model' => $model,
		));
	}

}