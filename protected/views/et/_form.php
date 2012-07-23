<div class="form">


<?php $form = $this->beginWidget('GxActiveForm', array(
	'id' => 'et-form',
	'enableAjaxValidation' => false,
));
?>

	<p class="note">
		<?php echo Yii::t('app', 'Fields with'); ?> <span class="required">*</span> <?php echo Yii::t('app', 'are required'); ?>.
	</p>

	<?php echo $form->errorSummary($model); ?>

		<div class="row">
		<?php echo $form->labelEx($model,'procesocompra_id'); ?>
		<?php echo $form->dropDownList($model, 'procesocompra_id', GxHtml::listDataEx(Procesocompra::model()->findAllAttributes(null, true))); ?>
		<?php echo $form->error($model,'procesocompra_id'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'alerta_id'); ?>
		<?php echo $form->dropDownList($model, 'alerta_id', GxHtml::listDataEx(Alerta::model()->findAllAttributes(null, true))); ?>
		<?php echo $form->error($model,'alerta_id'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'forma'); ?>
		<?php echo $form->textField($model, 'forma', array('maxlength' => 45)); ?>
		<?php echo $form->error($model,'forma'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'fecha'); ?>
		<?php echo $form->textField($model, 'fecha'); ?>
		<?php echo $form->error($model,'fecha'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'observacion1'); ?>
		<?php echo $form->textField($model, 'observacion1', array('maxlength' => 100)); ?>
		<?php echo $form->error($model,'observacion1'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'observacion2'); ?>
		<?php echo $form->textField($model, 'observacion2', array('maxlength' => 100)); ?>
		<?php echo $form->error($model,'observacion2'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'alerta'); ?>
		<?php echo $form->textField($model, 'alerta'); ?>
		<?php echo $form->error($model,'alerta'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'alertal1'); ?>
		<?php echo $form->textField($model, 'alertal1'); ?>
		<?php echo $form->error($model,'alertal1'); ?>
		</div><!-- row -->


<?php
echo GxHtml::submitButton(Yii::t('app', 'Save'));
$this->endWidget();
?>
</div><!-- form -->