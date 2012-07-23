<div class="form">


<?php $form = $this->beginWidget('GxActiveForm', array(
	'id' => 'centrocosto-form',
	'enableAjaxValidation' => false,
));
?>

	<p class="note">
		<?php echo Yii::t('app', 'Fields with'); ?> <span class="required">*</span> <?php echo Yii::t('app', 'are required'); ?>.
	</p>

	<?php echo $form->errorSummary($model); ?>

		<div class="row">
		<?php echo $form->labelEx($model,'tipoaporte_id'); ?>
		<?php echo $form->dropDownList($model, 'tipoaporte_id', GxHtml::listDataEx(Tipoaporte::model()->findAllAttributes(null, true))); ?>
		<?php echo $form->error($model,'tipoaporte_id'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'nuevo'); ?>
		<?php echo $form->textField($model, 'nuevo', array('maxlength' => 45)); ?>
		<?php echo $form->error($model,'nuevo'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'anterior'); ?>
		<?php echo $form->textField($model, 'anterior', array('maxlength' => 45)); ?>
		<?php echo $form->error($model,'anterior'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'otro'); ?>
		<?php echo $form->textField($model, 'otro', array('maxlength' => 45)); ?>
		<?php echo $form->error($model,'otro'); ?>
		</div><!-- row -->

		<label><?php echo GxHtml::encode($model->getRelationLabel('subitems')); ?></label>
		<?php echo $form->checkBoxList($model, 'subitems', GxHtml::encodeEx(GxHtml::listDataEx(Subitem::model()->findAllAttributes(null, true)), false, true)); ?>

<?php
echo GxHtml::submitButton(Yii::t('app', 'Save'));
$this->endWidget();
?>
</div><!-- form -->