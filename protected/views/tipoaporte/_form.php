<div class="form">


<?php $form = $this->beginWidget('GxActiveForm', array(
	'id' => 'tipoaporte-form',
	'enableAjaxValidation' => false,
));
?>

	<p class="note">
		<?php echo Yii::t('app', 'Fields with'); ?> <span class="required">*</span> <?php echo Yii::t('app', 'are required'); ?>.
	</p>

	<?php echo $form->errorSummary($model); ?>

		<div class="row">
		<?php echo $form->labelEx($model,'codigo'); ?>
		<?php echo $form->textField($model, 'codigo', array('maxlength' => 45)); ?>
		<?php echo $form->error($model,'codigo'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'sigla'); ?>
		<?php echo $form->textField($model, 'sigla', array('maxlength' => 45)); ?>
		<?php echo $form->error($model,'sigla'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'nombre'); ?>
		<?php echo $form->textField($model, 'nombre', array('maxlength' => 100)); ?>
		<?php echo $form->error($model,'nombre'); ?>
		</div><!-- row -->

		<label><?php echo GxHtml::encode($model->getRelationLabel('centrocostos')); ?></label>
		<?php echo $form->checkBoxList($model, 'centrocostos', GxHtml::encodeEx(GxHtml::listDataEx(Centrocosto::model()->findAllAttributes(null, true)), false, true)); ?>
		<label><?php echo GxHtml::encode($model->getRelationLabel('subitems')); ?></label>
		<?php echo $form->checkBoxList($model, 'subitems', GxHtml::encodeEx(GxHtml::listDataEx(Subitem::model()->findAllAttributes(null, true)), false, true)); ?>

<?php
echo GxHtml::submitButton(Yii::t('app', 'Save'));
$this->endWidget();
?>
</div><!-- form -->