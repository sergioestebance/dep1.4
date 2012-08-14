<div class="form">


<?php $form = $this->beginWidget('GxActiveForm', array(
	'id' => 'publicacion-form',
	'enableAjaxValidation' => false,
));
?>



	<?php echo $form->errorSummary($model); ?>

		<div class="row">
		<?php echo $form->labelEx($model,'fechaInicio'); ?>
		<?php echo $form->textField($model, 'fechaInicio'); ?>
		<?php echo $form->error($model,'fechaInicio'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'fechaCierre'); ?>
		<?php echo $form->textField($model, 'fechaCierre'); ?>
		<?php echo $form->error($model,'fechaCierre'); ?>
		</div><!-- row -->


<?php
echo GxHtml::submitButton(Yii::t('app', 'Guardar'));
$this->endWidget();
?>
</div><!-- form -->