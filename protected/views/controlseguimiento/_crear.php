<div class="form">


<?php $form = $this->beginWidget('GxActiveForm', array(
	'id' => 'controlseguimiento-form',
	'enableAjaxValidation' => false,
));
?>

	<p class="note">
		<?php echo Yii::t('app', 'Campos con'); ?> <span class="required">*</span> <?php echo Yii::t('app', 'son obligatorios'); ?>.
	</p>

	<?php echo $form->errorSummary($model); ?>

		<div class="row">
		<?php echo $form->labelEx($model,'procesocompra_id'); ?>
		<?php echo $form->dropDownList($model, 'procesocompra_id', GxHtml::listDataEx(Procesocompra::model()->findAllAttributes(null, true))); ?>
		<?php echo $form->error($model,'procesocompra_id'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'tipo'); ?>
		<?php echo $form->textField($model, 'tipo', array('maxlength' => 45)); ?>
		<?php echo $form->error($model,'tipo'); ?>
		</div><!-- row -->

<?php
echo GxHtml::submitButton(Yii::t('app', 'Guardar'));
$this->endWidget();
?>
</div><!-- form -->