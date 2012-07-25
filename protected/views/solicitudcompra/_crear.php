<div class="form">


<?php $form = $this->beginWidget('GxActiveForm', array(
	'id' => 'solicitudcompra-form',
	'enableAjaxValidation' => false,
));
?>

	<p class="note">
		<?php echo Yii::t('app', 'Campos con'); ?> <span class="required">*</span> <?php echo Yii::t('app', 'son obligatorios'); ?>.
	</p>

	<?php echo $form->errorSummary($model); ?>

		<div class="row">
		<?php echo $form->hiddenField($model,'procesocompra_id',array('size'=>45,'maxlength'=>45,'value'=>$model_pc->id)); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'numSolicitud'); ?>
		<?php echo $form->textField($model, 'numSolicitud'); ?>
		<?php echo $form->error($model,'numSolicitud'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'fecha'); ?>
		<?php echo $form->textField($model, 'fecha',array('value'=>date("Y-m-d H:i:s"),)); ?>
		<?php echo $form->error($model,'fecha'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'descripcion'); ?>
		<?php echo $form->textArea($model, 'descripcion', array('maxlength' => 200)); ?>
		<?php echo $form->error($model,'descripcion'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'monto'); ?>
		<?php echo $form->textField($model, 'monto', array('maxlength' => 45)); ?>
		<?php echo $form->error($model,'monto'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'saldo'); ?>
		<?php echo $form->textField($model, 'saldo', array('maxlength' => 45)); ?>
		<?php echo $form->error($model,'saldo'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'fechaFirma'); ?>
		<?php echo $form->textField($model, 'fechaFirma'); ?>
		<?php echo $form->error($model,'fechaFirma'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'itemAntiguo'); ?>
		<?php echo $form->textField($model, 'itemAntiguo'); ?>
		<?php echo $form->error($model,'itemAntiguo'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'itemNuevo'); ?>
		<?php echo $form->textField($model, 'itemNuevo'); ?>
		<?php echo $form->error($model,'itemNuevo'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'estado'); ?>
		<?php echo $form->dropDownList($model, 'estado',array('ACTIVO' => 'ACTIVO', 'FINALIZADO' => 'FINALIZADO')); ?>
		<?php echo $form->error($model,'estado'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'fechaEstado'); ?>
		<?php echo $form->textField($model, 'fechaEstado'); ?>
		<?php echo $form->error($model,'fechaEstado'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'observacion'); ?>
		<?php echo $form->textArea($model, 'observacion', array('maxlength' => 200)); ?>
		<?php echo $form->error($model,'observacion'); ?>
		</div><!-- row -->


<?php
echo GxHtml::submitButton(Yii::t('app', 'Guardar'));
$this->endWidget();
?>
</div><!-- form -->