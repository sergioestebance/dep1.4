<div class="form">


<?php $form = $this->beginWidget('GxActiveForm', array(
	'id' => 'enviobase-form',
	'enableAjaxValidation' => false,
));
?>



	<?php echo $form->errorSummary($model); ?>

		<div class="row">
		<?php echo $form->labelEx($model,'id'); ?>
		<?php echo $form->textField($model, 'id'); ?>
		<?php echo $form->error($model,'id'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'procesocompra_id'); ?>
		<?php echo $form->dropDownList($model, 'procesocompra_id', GxHtml::listDataEx(Procesocompra::model()->findAllAttributes(null, true))); ?>
		<?php echo $form->error($model,'procesocompra_id'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'fecha'); ?>
		<?php echo $form->textField($model, 'fecha'); ?>
		<?php echo $form->error($model,'fecha'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'nombreSupervisor'); ?>
		<?php echo $form->textField($model, 'nombreSupervisor', array('maxlength' => 45)); ?>
		<?php echo $form->error($model,'nombreSupervisor'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'estado'); ?>
		<?php echo $form->dropDownList($model, 'estado',array('' => '', 'FINALIZADO' => 'FINALIZADO')); ?>
		<?php echo $form->error($model,'estado'); ?>
		</div><!-- row -->


<?php
echo GxHtml::submitButton(Yii::t('app', 'Guardar'));
$this->endWidget();
?>
</div><!-- form -->