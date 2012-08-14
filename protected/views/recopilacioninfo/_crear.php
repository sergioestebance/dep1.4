<div class="form">


<?php $form = $this->beginWidget('GxActiveForm', array(
	'id' => 'recopilacioninfo-form',
	'enableAjaxValidation' => false,
));
?>
	<?php echo $form->errorSummary($model); ?>

		<div class="row">
		<?php echo $form->labelEx($model,'fase'); ?>
		<?php echo $form->textField($model, 'fase', array('maxlength' => 45)); ?>
		<?php echo $form->error($model,'fase'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'fecha1'); ?>
		<?php echo $form->textField($model, 'fecha1'); ?>
		<?php echo $form->error($model,'fecha1'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'fecha2'); ?>
		<?php echo $form->textField($model, 'fecha2'); ?>
		<?php echo $form->error($model,'fecha2'); ?>
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