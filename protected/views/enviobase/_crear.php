<div class="form">


<?php $form = $this->beginWidget('GxActiveForm', array(
	'id' => 'enviobase-form',
	'enableAjaxValidation' => false,
));
?>



	<?php echo $form->errorSummary($model); ?>


		<div class="row">
		<?php echo $form->hiddenField($model,'procesocompra_id',array('size'=>45,'maxlength'=>45,'value'=>$model_pc->id)); ?>
		</div><!-- row -->
		
		<div class="row">
		<?php echo $form->labelEx($model,'fecha'); ?>
		<?php $this->widget('zii.widgets.jui.CJuiDatePicker', array(
			'model'=>$model,
			'attribute'=>'fecha',
			
			// additional javascript options for the date picker plugin
			'options'=>array(
				'showAnim'=>'fold',
				'dateFormat'=>'yy-mm-dd',
			),
			'htmlOptions'=>array(
				'style'=>'height:20px;'
			),
		));?>
		<?php echo $form->error($model,'fecha'); ?>
		</div><!-- row -->
		
		<div class="row">
		<?php echo $form->labelEx($model,'nombreSupervisor'); ?>
		<?php echo $form->textField($model, 'nombreSupervisor', array('maxlength' => 45)); ?>
		<?php echo $form->error($model,'nombreSupervisor'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'estado'); ?>
		<?php echo $form->dropDownList($model, 'estado',array('ACTIVO' => 'ACTIVO', 'FINALIZADO' => 'FINALIZADO')); ?>
		<?php echo $form->error($model,'estado'); ?>
		</div><!-- row -->


<?php
echo GxHtml::submitButton(Yii::t('app', 'Guardar'));
$this->endWidget();
?>
</div><!-- form -->