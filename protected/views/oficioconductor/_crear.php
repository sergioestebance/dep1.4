<div class="form">


<?php $form = $this->beginWidget('GxActiveForm', array(
	'id' => 'oficioconductor-form',
	'enableAjaxValidation' => false,
));
?>



	<?php echo $form->errorSummary($model); ?>

		<div class="row">
		<?php echo $form->labelEx($model,'tipo'); ?>
		<?php echo $form->textField($model, 'tipo', array('maxlength' => 45)); ?>
		<?php echo $form->error($model,'tipo'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'numCarta'); ?>
		<?php echo $form->textField($model, 'numCarta', array('maxlength' => 45)); ?>
		<?php echo $form->error($model,'numCarta'); ?>
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
		<?php echo $form->labelEx($model,'observacion'); ?>
		<?php echo $form->textField($model, 'observacion', array('maxlength' => 200)); ?>
		<?php echo $form->error($model,'observacion'); ?>
		</div><!-- row -->


<?php
echo GxHtml::submitButton(Yii::t('app', 'Guardar'));
$this->endWidget();
?>
</div><!-- form -->