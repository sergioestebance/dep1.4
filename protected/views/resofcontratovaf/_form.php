<div class="form">


<?php $form = $this->beginWidget('GxActiveForm', array(
	'id' => 'resofcontratovaf-form',
	'enableAjaxValidation' => false,
));
?>

	<p class="note">
		<?php echo Yii::t('app', 'Campos con'); ?> <span class="required">*</span> <?php echo Yii::t('app', 'son obligatorios'); ?>.
	</p>

	<?php echo $form->errorSummary($model); ?>

		<div class="row">
		<?php echo $form->labelEx($model,'controlseguimiento_id'); ?>
		<?php echo $form->dropDownList($model, 'controlseguimiento_id', GxHtml::listDataEx(Controlseguimiento::model()->findAllAttributes(null, true))); ?>
		<?php echo $form->error($model,'controlseguimiento_id'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'fechaCreacion'); ?>
		<?php echo $form->textField($model, 'fechaCreacion'); ?>
		<?php echo $form->error($model,'fechaCreacion'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'numRes'); ?>
		<?php echo $form->textField($model, 'numRes', array('maxlength' => 45)); ?>
		<?php echo $form->error($model,'numRes'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'fechaNumRes'); ?>
		<?php echo $form->textField($model, 'fechaNumRes'); ?>
		<?php echo $form->error($model,'fechaNumRes'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'alerta1'); ?>
		<?php echo $form->textField($model, 'alerta1'); ?>
		<?php echo $form->error($model,'alerta1'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'firma'); ?>
		<?php echo $form->textField($model, 'firma', array('maxlength' => 45)); ?>
		<?php echo $form->error($model,'firma'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'fechaFirma'); ?>
		<?php echo $form->textField($model, 'fechaFirma', array('maxlength' => 45)); ?>
		<?php echo $form->error($model,'fechaFirma'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'alerta2'); ?>
		<?php echo $form->textField($model, 'alerta2'); ?>
		<?php echo $form->error($model,'alerta2'); ?>
		</div><!-- row -->


<?php
echo GxHtml::submitButton(Yii::t('app', 'Guardar'));
$this->endWidget();
?>
</div><!-- form -->