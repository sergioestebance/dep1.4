<div class="form">


<?php $form = $this->beginWidget('GxActiveForm', array(
	'id' => 'vaf-form',
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
		<?php echo $form->labelEx($model,'numResolucion'); ?>
		<?php echo $form->textField($model, 'numResolucion', array('maxlength' => 45)); ?>
		<?php echo $form->error($model,'numResolucion'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'fechaCreacion'); ?>
		<?php echo $form->textField($model, 'fechaCreacion'); ?>
		<?php echo $form->error($model,'fechaCreacion'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'fechaRespuesta'); ?>
		<?php echo $form->textField($model, 'fechaRespuesta'); ?>
		<?php echo $form->error($model,'fechaRespuesta'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'alerta'); ?>
		<?php echo $form->textField($model, 'alerta'); ?>
		<?php echo $form->error($model,'alerta'); ?>
		</div><!-- row -->


<?php
echo GxHtml::submitButton(Yii::t('app', 'Guardar'));
$this->endWidget();
?>
</div><!-- form -->