<?php

$this->breadcrumbs = array(
	$model->label(2) => array('index'),
	Yii::t('app', 'Crear'),
);

$this->menu = array(
	array('label'=>Yii::t('app', 'Listar') . ' ' . $model->label(2), 'url' => array('index')),
	array('label'=>Yii::t('app', 'Administrar') . ' ' . $model->label(2), 'url' => array('admin')),
);
?>

<h1><?php echo Yii::t('app', 'Crear') . ' ' . GxHtml::encode($model->label()); ?></h1>

<div class="form">


<?php $form = $this->beginWidget('GxActiveForm', array(
	'id' => 'plantilla-form',
	'enableAjaxValidation' => false,
));
?>



	<?php echo $form->errorSummary($model); ?>

		<div class="row">
		<?php echo $form->labelEx($model,'proyecto_id'); ?>
		<?php echo $form->hiddenField($model,'proyecto_id',array(
														'size'=>45,
														'maxlength'=>45,
														'value'=>$model_subitem->proyecto_id)); ?>
		<?php echo CHtml::encode($model_subitem->codigo); ?>											
		<?php echo $form->error($model,'proyecto_id'); ?>
		</div><!-- row -->
		


		<div class="row">
		<?php echo $form->labelEx($model,'tipoDocumento'); ?>
		<?php echo $form->textField($model, 'tipoDocumento', array('maxlength' => 45)); ?>
		<?php echo $form->error($model,'tipoDocumento'); ?>
		</div><!-- row -->
		
		<div class="row">
		<?php echo $form->labelEx($model,'numDocumento'); ?>
		<?php echo $form->textField($model, 'numDocumento', array('maxlength' => 45)); ?>
		<?php echo $form->error($model,'numDocumento'); ?>
		</div><!-- row -->
		
		<div class="row">
		<?php echo $form->labelEx($model,'numComprobanteEI'); ?>
		<?php echo $form->textField($model, 'numComprobanteEI', array('maxlength' => 45)); ?>
		<?php echo $form->error($model,'numComprobanteEI'); ?>
		</div><!-- row -->
		
		<div class="row">
		<?php echo $form->labelEx($model,'fechaEI'); ?>
		<?php echo $form->textField($model, 'fechaEI'); ?>
		<?php echo $form->error($model,'fechaEI'); ?>
		</div><!-- row -->
		
		<div class="row">
		<?php echo $form->labelEx($model,'tipoDocumentoFB'); ?>
		<?php echo $form->textField($model, 'tipoDocumentoFB', array('maxlength' => 45)); ?>
		<?php echo $form->error($model,'tipoDocumentoFB'); ?>
		</div><!-- row -->
		
		<div class="row">
		<?php echo $form->labelEx($model,'numDocumentoFB'); ?>
		<?php echo $form->textField($model, 'numDocumentoFB', array('maxlength' => 45)); ?>
		<?php echo $form->error($model,'numDocumentoFB'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'rutProveedor'); ?>
		<?php echo $form->textField($model, 'rutProveedor', array('maxlength' => 45)); ?>
		<?php echo $form->error($model,'rutProveedor'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'fechaEmisionDoc'); ?>
		<?php echo $form->textField($model, 'fechaEmisionDoc'); ?>
		<?php echo $form->error($model,'fechaEmisionDoc'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'fechaCancelacionDoc'); ?>
		<?php echo $form->textField($model, 'fechaCancelacionDoc'); ?>
		<?php echo $form->error($model,'fechaCancelacionDoc'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'detalleDoc'); ?>
		<?php echo $form->textField($model, 'detalleDoc', array('maxlength' => 200)); ?>
		<?php echo $form->error($model,'detalleDoc'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'valorTotal'); ?>
		<?php echo $form->textField($model, 'valorTotal', array('maxlength' => 45)); ?>
		<?php echo $form->error($model,'valorTotal'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'observacion'); ?>
		<?php echo $form->textField($model, 'observacion', array('maxlength' => 200)); ?>
		<?php echo $form->error($model,'observacion'); ?>
		</div><!-- row -->


<?php
echo GxHtml::submitButton(Yii::t('app', 'Guardar'));
$this->endWidget();
?>
</div><!-- form -->