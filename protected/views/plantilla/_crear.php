<div class="form">


<?php $form = $this->beginWidget('GxActiveForm', array(
	'id' => 'plantilla-form',
	'enableAjaxValidation' => false,
));
?>

	<?php echo $form->errorSummary($model); ?>

		<div class="row">
		<?php echo $form->labelEx($model,'item'); ?>
		<?php echo $form->textField($model, 'item', array('maxlength' => 45)); ?>
		<?php echo $form->error($model,'item'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'numDocumentoSC'); ?>
		<?php echo $form->textField($model, 'numDocumentoSC', array('maxlength' => 45)); ?>
		<?php echo $form->error($model,'numDocumentoSC'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'fechaSC'); ?>
		<?php echo $form->textField($model, 'fechaSC'); ?>
		<?php echo $form->error($model,'fechaSC'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'numDocumentoOC'); ?>
		<?php echo $form->textField($model, 'numDocumentoOC', array('maxlength' => 45)); ?>
		<?php echo $form->error($model,'numDocumentoOC'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'fechaOC'); ?>
		<?php echo $form->textField($model, 'fechaOC'); ?>
		<?php echo $form->error($model,'fechaOC'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'tipoDocumentoDP'); ?>
		<?php echo $form->textField($model, 'tipoDocumentoDP', array('maxlength' => 45)); ?>
		<?php echo $form->error($model,'tipoDocumentoDP'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'numDocumentoDP'); ?>
		<?php echo $form->textField($model, 'numDocumentoDP', array('maxlength' => 45)); ?>
		<?php echo $form->error($model,'numDocumentoDP'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'fechaDP'); ?>
		<?php echo $form->textField($model, 'fechaDP'); ?>
		<?php echo $form->error($model,'fechaDP'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'numComprobanteEI'); ?>
		<?php echo $form->textField($model, 'numComprobanteEI', array('maxlength' => 45)); ?>
		<?php echo $form->error($model,'numComprobanteEI'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'fechaEI'); ?>
		<?php echo $form->textField($model, 'fechaEI'); ?>
		<?php echo $form->error($model,'fechaEI'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'numOrdenPagoEI'); ?>
		<?php echo $form->textField($model, 'numOrdenPagoEI'); ?>
		<?php echo $form->error($model,'numOrdenPagoEI'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'tipoDocumentoFB'); ?>
		<?php echo $form->textField($model, 'tipoDocumentoFB', array('maxlength' => 45)); ?>
		<?php echo $form->error($model,'tipoDocumentoFB'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'numDocumentoFB'); ?>
		<?php echo $form->textField($model, 'numDocumentoFB', array('maxlength' => 45)); ?>
		<?php echo $form->error($model,'numDocumentoFB'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'rutProveedorFB'); ?>
		<?php echo $form->textField($model, 'rutProveedorFB', array('maxlength' => 45)); ?>
		<?php echo $form->error($model,'rutProveedorFB'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'fechaFB'); ?>
		<?php echo $form->textField($model, 'fechaFB'); ?>
		<?php echo $form->error($model,'fechaFB'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'fechaCancelacionFB'); ?>
		<?php echo $form->textField($model, 'fechaCancelacionFB'); ?>
		<?php echo $form->error($model,'fechaCancelacionFB'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'detalleDocumentoFB'); ?>
		<?php echo $form->textField($model, 'detalleDocumentoFB', array('maxlength' => 200)); ?>
		<?php echo $form->error($model,'detalleDocumentoFB'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'valorCanceladoFB'); ?>
		<?php echo $form->textField($model, 'valorCanceladoFB', array('maxlength' => 45)); ?>
		<?php echo $form->error($model,'valorCanceladoFB'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'observacion1FB'); ?>
		<?php echo $form->textField($model, 'observacion1FB', array('maxlength' => 200)); ?>
		<?php echo $form->error($model,'observacion1FB'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'procesosFB'); ?>
		<?php echo $form->textField($model, 'procesosFB', array('maxlength' => 200)); ?>
		<?php echo $form->error($model,'procesosFB'); ?>
		</div><!-- row -->


<?php
echo GxHtml::submitButton(Yii::t('app', 'Save'));
$this->endWidget();
?>
</div><!-- form -->