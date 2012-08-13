<div class="form">


<?php $form = $this->beginWidget('GxActiveForm', array(
	'id' => 'alerta-form',
	'enableAjaxValidation' => false,
));
?>




	<?php echo $form->errorSummary($model); ?>

		<div class="row">
		<?php echo $form->labelEx($model,'mensaje'); ?>
		<?php echo $form->textField($model, 'mensaje', array('maxlength' => 45)); ?>
		<?php echo $form->error($model,'mensaje'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'fechaIngreso'); ?>
		<?php echo $form->textField($model, 'fechaIngreso'); ?>
		<?php echo $form->error($model,'fechaIngreso'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'fechaAviso'); ?>
		<?php echo $form->textField($model, 'fechaAviso'); ?>
		<?php echo $form->error($model,'fechaAviso'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'visible'); ?>
		<?php echo $form->checkBox($model, 'visible'); ?>
		<?php echo $form->error($model,'visible'); ?>
		</div><!-- row -->

		<label><?php echo GxHtml::encode($model->getRelationLabel('adquisicions')); ?></label>
		<?php echo $form->checkBoxList($model, 'adquisicions', GxHtml::encodeEx(GxHtml::listDataEx(Adquisicion::model()->findAllAttributes(null, true)), false, true)); ?>
		<label><?php echo GxHtml::encode($model->getRelationLabel('ets')); ?></label>
		<?php echo $form->checkBoxList($model, 'ets', GxHtml::encodeEx(GxHtml::listDataEx(Et::model()->findAllAttributes(null, true)), false, true)); ?>

<?php
echo GxHtml::submitButton(Yii::t('app', 'Guardar'));
$this->endWidget();
?>
</div><!-- form -->