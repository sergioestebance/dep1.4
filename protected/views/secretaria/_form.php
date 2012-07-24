<div class="form">


<?php $form = $this->beginWidget('GxActiveForm', array(
	'id' => 'secretaria-form',
	'enableAjaxValidation' => false,
));
?>

	<p class="note">
		<?php echo Yii::t('app', 'Fields with'); ?> <span class="required">*</span> <?php echo Yii::t('app', 'are required'); ?>.
	</p>

	<?php echo $form->errorSummary($model); ?>

		<div class="row">
		<?php echo $form->labelEx($model,'controlseguimiento_id'); ?>
		<?php echo $form->dropDownList($model, 'controlseguimiento_id', GxHtml::listDataEx(Controlseguimiento::model()->findAllAttributes(null, true))); ?>
		<?php echo $form->error($model,'controlseguimiento_id'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'tipo'); ?>
		<?php echo $form->textField($model, 'tipo', array('maxlength' => 45)); ?>
		<?php echo $form->error($model,'tipo'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'estado'); ?>
		<?php echo $form->textField($model, 'estado', array('maxlength' => 45)); ?>
		<?php echo $form->error($model,'estado'); ?>
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
		<?php echo $form->labelEx($model,'observacion'); ?>
		<?php echo $form->textField($model, 'observacion', array('maxlength' => 200)); ?>
		<?php echo $form->error($model,'observacion'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'alerta1'); ?>
		<?php echo $form->textField($model, 'alerta1'); ?>
		<?php echo $form->error($model,'alerta1'); ?>
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