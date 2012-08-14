<div class="form">


<?php $form = $this->beginWidget('GxActiveForm', array(
	'id' => 'resolucionof-form',
	'enableAjaxValidation' => false,
));
?>



	<?php echo $form->errorSummary($model); ?>

		<div class="row">
		<?php echo $form->labelEx($model,'tipo'); ?>
		<?php echo $form->textField($model, 'tipo', array('maxlength' => 45)); ?>
		<?php echo $form->error($model,'tipo'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'numResolucionFirmada'); ?>
		<?php echo $form->textField($model, 'numResolucionFirmada', array('maxlength' => 45)); ?>
		<?php echo $form->error($model,'numResolucionFirmada'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'fechaCreacion'); ?>
		<?php echo $form->textField($model, 'fechaCreacion'); ?>
		<?php echo $form->error($model,'fechaCreacion'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'fechaEntregaRes'); ?>
		<?php echo $form->textField($model, 'fechaEntregaRes'); ?>
		<?php echo $form->error($model,'fechaEntregaRes'); ?>
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