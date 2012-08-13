<div class="form">


<?php $form = $this->beginWidget('GxActiveForm', array(
	'id' => 'constancia-form',
	'enableAjaxValidation' => false,
));
?>


		<div class="row">
		<?php echo $form->labelEx($model,'agno'); ?>
		<?php echo $form->dropDownList($model, 'agno',array('2011' => '2011', '2012' => '2012', '2013' => '2013', '2014' => '2014')); ?>
		<?php echo $form->error($model,'agno'); ?>
		</div><!-- row -->
		
		<?php echo $form->errorSummary($model); ?>
		<div class="row">
		<?php echo $form->labelEx($model,'mes'); ?>
		<?php echo $form->dropDownList($model, 'mes',array('Enero' => 'Enero', 'Febrero' => 'Febrero', 'Marzo' => 'Marzo', 'Abril' => 'Abril', 'Mayo' => 'Mayo', 'Junio' => 'Junio', 'Julio' => 'Julio', 'Agosto' => 'Agosto', 'Septiembre' => 'Septiembre', 'Octubre' => 'Octubre', 'Noviembre' => 'Noviembre', 'Diciembre' => 'Diciembre')); ?>
		<?php echo $form->error($model,'mes'); ?>
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
echo GxHtml::submitButton(Yii::t('app', 'Guardar'));
$this->endWidget();
?>
</div><!-- form -->