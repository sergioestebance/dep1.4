<div class="form">


<?php $form = $this->beginWidget('GxActiveForm', array(
	'id' => 'honorario1-form',
	'enableAjaxValidation' => false,
));
?>

	<p class="note">
		<?php echo Yii::t('app', 'Fields with'); ?> <span class="required">*</span> <?php echo Yii::t('app', 'are required'); ?>.
	</p>

	<?php echo $form->errorSummary($model); ?>

		<div class="row">
		<?php echo $form->labelEx($model,'procesogasto_id'); ?>
		<?php echo $form->dropDownList($model, 'procesogasto_id', GxHtml::listDataEx(Procesogasto::model()->findAllAttributes(null, true))); ?>
		<?php echo $form->error($model,'procesogasto_id'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'item'); ?>
		<?php echo $form->textField($model, 'item', array('maxlength' => 45)); ?>
		<?php echo $form->error($model,'item'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'nombrePersona'); ?>
		<?php echo $form->textField($model, 'nombrePersona', array('maxlength' => 200)); ?>
		<?php echo $form->error($model,'nombrePersona'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'rut'); ?>
		<?php echo $form->textField($model, 'rut', array('maxlength' => 45)); ?>
		<?php echo $form->error($model,'rut'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'numConvenio'); ?>
		<?php echo $form->textField($model, 'numConvenio'); ?>
		<?php echo $form->error($model,'numConvenio'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'fechaInicio'); ?>
		<?php echo $form->textField($model, 'fechaInicio'); ?>
		<?php echo $form->error($model,'fechaInicio'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'fechaTermino'); ?>
		<?php echo $form->textField($model, 'fechaTermino'); ?>
		<?php echo $form->error($model,'fechaTermino'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'cuotas'); ?>
		<?php echo $form->textField($model, 'cuotas'); ?>
		<?php echo $form->error($model,'cuotas'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'monto'); ?>
		<?php echo $form->textField($model, 'monto', array('maxlength' => 45)); ?>
		<?php echo $form->error($model,'monto'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'fechaRecilio'); ?>
		<?php echo $form->textField($model, 'fechaRecilio'); ?>
		<?php echo $form->error($model,'fechaRecilio'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'reciliacion'); ?>
		<?php echo $form->textField($model, 'reciliacion', array('maxlength' => 45)); ?>
		<?php echo $form->error($model,'reciliacion'); ?>
		</div><!-- row -->


<?php
echo GxHtml::submitButton(Yii::t('app', 'Save'));
$this->endWidget();
?>
</div><!-- form -->