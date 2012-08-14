<div class="form">


<?php $form = $this->beginWidget('GxActiveForm', array(
	'id' => 'resolucionadlp-form',
	'enableAjaxValidation' => false,
));
?>



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
		


<?php
echo GxHtml::submitButton(Yii::t('app', 'Guardar'));
$this->endWidget();
?>
</div><!-- form -->