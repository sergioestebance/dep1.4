<div class="form">


<?php $form = $this->beginWidget('GxActiveForm', array(
	'id' => 'constancia-form',
	'enableAjaxValidation' => false,
));
?>
	<p class="note">
		<?php echo Yii::t('app', 'Campos con'); ?> <span class="required">*</span> <?php echo Yii::t('app', 'son obligatorios'); ?>.
	</p>


	<?php echo $form->errorSummary($model); ?>
		<div class="row">
		<?php echo $form->labelEx($model,'mes'); ?>
		<?php echo $form->textField($model, 'mes', array('maxlength' => 45)); ?>
		<?php echo $form->error($model,'mes'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'item'); ?>
		<?php echo $form->textField($model, 'item', array('maxlength' => 45)); ?>
		<?php echo $form->error($model,'item'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'detalleDocumento'); ?>
		<?php echo $form->textField($model, 'detalleDocumento', array('maxlength' => 200)); ?>
		<?php echo $form->error($model,'detalleDocumento'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'valor'); ?>
		<?php echo $form->textField($model, 'valor', array('maxlength' => 45)); ?>
		<?php echo $form->error($model,'valor'); ?>
		</div><!-- row -->


<?php
echo GxHtml::submitButton(Yii::t('app', 'Guardar'));
$this->endWidget();
?>
</div><!-- form -->