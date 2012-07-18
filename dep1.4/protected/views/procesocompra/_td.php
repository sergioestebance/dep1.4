<?php
Yii::app()->clientScript->registerScriptFile(
        Yii::app()->baseUrl . '/js/proceso_compra.js',
	CClientScript::POS_END);?>

<div class="form">

<?php $form = $this->beginWidget('GxActiveForm', array(
	'id' => 'procesocompra-form',
	'enableAjaxValidation' => false,
));
?>

	<?php echo $form->errorSummary($model); ?>
			
		<div class="row">
		<?php echo $form->labelEx($model,'fechaTD'); ?>
		<?php echo $form->textField($model, 'fechaTD', array('maxlength' => 45)); ?>
		<?php echo $form->error($model,'fechaTD'); ?>	
		</div><!-- row -->
		
		<div class="row">
		<?php echo $form->labelEx($model,'numeroidTD'); ?>
		<?php echo $form->textField($model, 'numeroidTD', array('maxlength' =>45,)); ?>
		<?php echo $form->error($model,'numeroidTD'); ?>
		</div><!-- row -->
		
		<div class="row">
		<?php echo $form->labelEx($model,'observacionTD'); ?>
		<?php echo $form->textField($model, 'observacionTD', array('maxlength' =>45,)); ?>
		<?php echo $form->error($model,'observacionTD'); ?>
		</div><!-- row -->
<?php
echo GxHtml::submitButton(Yii::t('app', 'Guardar'));
$this->endWidget();
?>
</div><!-- form -->



