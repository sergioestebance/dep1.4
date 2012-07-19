<div class="form">


<?php $form = $this->beginWidget('GxActiveForm', array(
	'id' => 'constancia-form',
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
		<?php echo $form->labelEx($model,'proyecto_id'); ?>
		<?php echo $form->dropDownList($model, 'proyecto_id', GxHtml::listDataEx(Proyecto::model()->findAllAttributes(null, true))); ?>
		<?php echo $form->error($model,'proyecto_id'); ?>
		</div><!-- row -->
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
echo GxHtml::submitButton(Yii::t('app', 'Save'));
$this->endWidget();
?>
</div><!-- form -->