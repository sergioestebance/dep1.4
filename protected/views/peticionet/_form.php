
<div class="form">

<?php 
$form = $this->beginWidget('GxActiveForm', array(
	'id' => 'peticionet-form',
	'enableAjaxValidation' => false,
));
?>


	
	<?php echo $form->errorSummary($model); ?>
		
		<div class="row">
		<?php echo $form->hiddenField($model,'procesocompra_id',array('size'=>45,'maxlength'=>45,'value'=>$model_pc->id)); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'fecha'); ?>
		<?php echo $form->textField($model, 'fecha',array('value'=>date("Y-m-d H:i:s"),)); ?>
		<?php echo $form->error($model,'fecha'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'observacion'); ?>
		<?php echo $form->textField($model, 'observacion', array('maxlength' => 200)); ?>
		<?php echo $form->error($model,'observacion'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'estado'); ?>
		<?php echo $form->dropDownList($model, 'estado', array('ESPERA'=>'ESPERA','FINALIZADO'=>'FINALIZADO', )); ?>
		<?php echo $form->error($model,'estado'); ?>
		</div><!-- row -->
		

<?php
echo GxHtml::submitButton(Yii::t('app', 'Guardar'));
$this->endWidget();
?>
</div><!-- form -->