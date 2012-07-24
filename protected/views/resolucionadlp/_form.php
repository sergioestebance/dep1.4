<div class="form">


<?php $form = $this->beginWidget('GxActiveForm', array(
	'id' => 'resolucionadlp-form',
	'enableAjaxValidation' => false,
));
?>

	<p class="note">
		<?php echo Yii::t('app', 'Campos con'); ?> <span class="required">*</span> <?php echo Yii::t('app', 'son obligatorios'); ?>.
	</p>

	<?php echo $form->errorSummary($model); ?>

		<div class="row">
		<?php echo $form->labelEx($model,'actaAD'); ?>
		<?php echo $form->textField($model, 'actaAD', array('maxlength' => 45)); ?>
		<?php echo $form->error($model,'actaAD'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'numResolucionDA'); ?>
		<?php echo $form->textField($model, 'numResolucionDA', array('maxlength' => 45)); ?>
		<?php echo $form->error($model,'numResolucionDA'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'firmaDA'); ?>
		<?php echo $form->textField($model, 'firmaDA', array('maxlength' => 45)); ?>
		<?php echo $form->error($model,'firmaDA'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'controlseguimiento_id'); ?>
		<?php echo $form->dropDownList($model, 'controlseguimiento_id', GxHtml::listDataEx(Controlseguimiento::model()->findAllAttributes(null, true))); ?>
		<?php echo $form->error($model,'controlseguimiento_id'); ?>
		</div><!-- row -->


<?php
echo GxHtml::submitButton(Yii::t('app', 'Guardar'));
$this->endWidget();
?>
</div><!-- form -->