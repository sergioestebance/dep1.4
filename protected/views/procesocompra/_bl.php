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
		<?php echo $form->labelEx($model,'fechaBL'); ?>
		<?php echo $form->textField($model, 'fechaBL', array('maxlength' => 45)); ?>
		<?php echo $form->error($model,'fechaBL'); ?>	
		</div><!-- row -->
		
		<div class="row">
		<?php echo $form->labelEx($model,'idBL'); ?>
		<?php echo $form->textField($model, 'idBL', array('maxlength' =>45,)); ?>
		<?php echo $form->error($model,'idBL'); ?>
		</div><!-- row -->
		
<?php
echo GxHtml::submitButton(Yii::t('app', 'Guardar'));
$this->endWidget();
?>
</div><!-- form -->



