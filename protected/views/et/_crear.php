<div class="form">


<?php $form = $this->beginWidget('GxActiveForm', array(
	'id' => 'et-form',
	'enableAjaxValidation' => false,
));
?>

	<p class="note">
		<?php echo Yii::t('app', 'Campos con'); ?> <span class="required">*</span> <?php echo Yii::t('app', 'son obligatorios'); ?>.
	</p>

	<?php echo $form->errorSummary($model); ?>


		<div class="row">
		<?php echo $form->labelEx($model,'forma'); ?>
		<?php echo $form->textField($model, 'forma', array('maxlength' => 45)); ?>
		<?php echo $form->error($model,'forma'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'fecha'); ?>
		<?php echo $form->textField($model, 'fecha'); ?>
		<?php echo $form->error($model,'fecha'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'observacion1'); ?>
		<?php echo $form->textField($model, 'observacion1', array('maxlength' => 100)); ?>
		<?php echo $form->error($model,'observacion1'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'observacion2'); ?>
		<?php echo $form->textField($model, 'observacion2', array('maxlength' => 100)); ?>
		<?php echo $form->error($model,'observacion2'); ?>
		</div><!-- row -->


<?php
echo GxHtml::submitButton(Yii::t('app', 'Guardar'));
$this->endWidget();
?>
</div><!-- form -->