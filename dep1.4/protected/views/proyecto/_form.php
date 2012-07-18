<div class="form">


<?php $form = $this->beginWidget('GxActiveForm', array(
	'id' => 'proyecto-form',
	'enableAjaxValidation' => false,
));
?>

	<p class="note">
		<?php echo Yii::t('app', 'Campos con'); ?> <span class="required">*</span> <?php echo Yii::t('app', 'son obligatorios'); ?>.
	</p>

	<?php echo $form->errorSummary($model); ?>

		<div class="row">
		<?php echo $form->labelEx($model,'codigoProyecto'); ?>
		<?php echo $form->textField($model, 'codigoProyecto', array('maxlength' => 200)); ?>
		<?php echo $form->error($model,'codigoProyecto'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'nombre'); ?>
		<?php echo $form->textField($model, 'nombre', array('maxlength' => 200)); ?>
		<?php echo $form->error($model,'nombre'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'codigoBip'); ?>
		<?php echo $form->textField($model, 'codigoBip', array('maxlength' => 200)); ?>
		<?php echo $form->error($model,'codigoBip'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'duracion'); ?>
		<?php echo $form->textField($model, 'duracion', array('maxlength' => 200)); ?>
		<?php echo $form->error($model,'duracion'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'director'); ?>
		<?php echo $form->textField($model, 'director', array('maxlength' => 200)); ?>
		<?php echo $form->error($model,'director'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'aporteFic'); ?>
		<?php echo $form->textField($model, 'aporteFic', array('maxlength' => 200)); ?>
		<?php echo $form->error($model,'aporteFic'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'aporteUtaV'); ?>
		<?php echo $form->textField($model, 'aporteUtaV', array('maxlength' => 200)); ?>
		<?php echo $form->error($model,'aporteUtaV'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'aporteUtaP'); ?>
		<?php echo $form->textField($model, 'aporteUtaP', array('maxlength' => 200)); ?>
		<?php echo $form->error($model,'aporteUtaP'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'aporteUtaTotal'); ?>
		<?php echo $form->textField($model, 'aporteUtaTotal', array('maxlength' => 200)); ?>
		<?php echo $form->error($model,'aporteUtaTotal'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'aportesOtros'); ?>
		<?php echo $form->textField($model, 'aportesOtros', array('maxlength' => 200)); ?>
		<?php echo $form->error($model,'aportesOtros'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'montoProyecto'); ?>
		<?php echo $form->textField($model, 'montoProyecto', array('maxlength' => 200)); ?>
		<?php echo $form->error($model,'montoProyecto'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'aporteFicAnt'); ?>
		<?php echo $form->textField($model, 'aporteFicAnt'); ?>
		<?php echo $form->error($model,'aporteFicAnt'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'porcAporteFic'); ?>
		<?php echo $form->textField($model, 'porcAporteFic'); ?>
		<?php echo $form->error($model,'porcAporteFic'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'porcAporteVal'); ?>
		<?php echo $form->textField($model, 'porcAporteVal'); ?>
		<?php echo $form->error($model,'porcAporteVal'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'porcAportePec'); ?>
		<?php echo $form->textField($model, 'porcAportePec'); ?>
		<?php echo $form->error($model,'porcAportePec'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'porcAporteExt'); ?>
		<?php echo $form->textField($model, 'porcAporteExt'); ?>
		<?php echo $form->error($model,'porcAporteExt'); ?>
		</div><!-- row -->

<?php
echo GxHtml::submitButton(Yii::t('app', 'Guardar'));
$this->endWidget();
?>
</div><!-- form -->