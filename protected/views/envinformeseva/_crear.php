<div class="form">


<?php $form = $this->beginWidget('GxActiveForm', array(
	'id' => 'envinformeseva-form',
	'enableAjaxValidation' => false,
));
?>



	<?php echo $form->errorSummary($model); ?>

		<div class="row">
		<?php echo $form->labelEx($model,'fechaCreacion'); ?>
		<?php echo $form->textField($model, 'fechaCreacion'); ?>
		<?php echo $form->error($model,'fechaCreacion'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'estado'); ?>
		<?php echo $form->textField($model, 'estado', array('maxlength' => 45)); ?>
		<?php echo $form->error($model,'estado'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'fecha1'); ?>
		<?php echo $form->textField($model, 'fecha1'); ?>
		<?php echo $form->error($model,'fecha1'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'observacion1'); ?>
		<?php echo $form->textField($model, 'observacion1', array('maxlength' => 200)); ?>
		<?php echo $form->error($model,'observacion1'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'fecha2'); ?>
		<?php echo $form->textField($model, 'fecha2'); ?>
		<?php echo $form->error($model,'fecha2'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'observacion2'); ?>
		<?php echo $form->textField($model, 'observacion2', array('maxlength' => 200)); ?>
		<?php echo $form->error($model,'observacion2'); ?>
		</div><!-- row -->


<?php
echo GxHtml::submitButton(Yii::t('app', 'Guardar'));
$this->endWidget();
?>
</div><!-- form -->