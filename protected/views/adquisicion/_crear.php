<div class="form">


<?php $form = $this->beginWidget('GxActiveForm', array(
	'id' => 'adquisicion-form',
	'enableAjaxValidation' => false,
));
?>



	<?php echo $form->errorSummary($model); ?>

		<div class="row">
		<?php echo $form->hiddenField($model,'procesocompra_id',array('size'=>45,'maxlength'=>45,'value'=>$model_pc->id)); ?>
		</div><!-- row -->
		
		<div class="row">
		<?php echo $form->labelEx($model,'fechaCreacion'); ?>
		<?php $this->widget('zii.widgets.jui.CJuiDatePicker', array(
			'model'=>$model,
			'attribute'=>'fechaCreacion',
			
			// additional javascript options for the date picker plugin
			'options'=>array(
				'showAnim'=>'fold',
				'dateFormat'=>'yy-mm-dd',
			),
			'htmlOptions'=>array(
				'style'=>'height:20px;'
			),
		));?>
		<?php echo $form->error($model,'fechaCreacion'); ?>
		</div><!-- row -->
		
		<div class="row">
		<?php echo $form->labelEx($model,'fechaRespuesta'); ?>
		<?php $this->widget('zii.widgets.jui.CJuiDatePicker', array(
			'model'=>$model,
			'attribute'=>'fechaRespuesta',
			
			// additional javascript options for the date picker plugin
			'options'=>array(
				'showAnim'=>'fold',
				'dateFormat'=>'yy-mm-dd',
			),
			'htmlOptions'=>array(
				'style'=>'height:20px;'
			),
		));?>
		<?php echo $form->error($model,'fechaRespuesta'); ?>
		</div><!-- row -->
		
		<div class="row">
		<?php echo $form->labelEx($model,'estado'); ?>
		<?php echo $form->dropDownList($model, 'estado',array('ACTIVO' => 'ACTIVO', 'FINALIZADO' => 'FINALIZADO')); ?>
		<?php echo $form->error($model,'estado'); ?>
		</div><!-- row -->
		
		<div class="row">
		<?php echo $form->labelEx($model,'observacion'); ?>
		<?php echo $form->textField($model, 'observacion', array('maxlength' => 200)); ?>
		<?php echo $form->error($model,'observacion'); ?>
		</div><!-- row -->


<?php
echo GxHtml::submitButton(Yii::t('app', 'Guardar'));
$this->endWidget();
?>
</div><!-- form -->