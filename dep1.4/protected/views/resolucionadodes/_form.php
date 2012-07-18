<div class="form">


<?php $form = $this->beginWidget('GxActiveForm', array(
	'id' => 'resolucionadodes-form',
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
		<?php echo $form->labelEx($model,'fechaCreacion'); ?>
		<?php echo $form->textField($model, 'fechaCreacion'); ?>
		<?php echo $form->error($model,'fechaCreacion'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'numResolucion'); ?>
		<?php echo $form->textField($model, 'numResolucion', array('maxlength' => 45)); ?>
		<?php echo $form->error($model,'numResolucion'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'firma'); ?>
		<?php echo $form->textField($model, 'firma', array('maxlength' => 45)); ?>
		<?php echo $form->error($model,'firma'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'fechaRes'); ?>
		<?php echo $form->textField($model, 'fechaRes'); ?>
		<?php echo $form->error($model,'fechaRes'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'fechaFirma'); ?>
		<?php echo $form->textField($model, 'fechaFirma'); ?>
		<?php echo $form->error($model,'fechaFirma'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'actaAdodes'); ?>
		<?php echo $form->textField($model, 'actaAdodes', array('maxlength' => 45)); ?>
		<?php echo $form->error($model,'actaAdodes'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'fechaActa'); ?>
		<?php echo $form->textField($model, 'fechaActa'); ?>
		<?php echo $form->error($model,'fechaActa'); ?>
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
echo GxHtml::submitButton(Yii::t('app', 'Save'));
$this->endWidget();
?>
</div><!-- form -->