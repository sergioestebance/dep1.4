<div class="form">


<?php $form = $this->beginWidget('GxActiveForm', array(
	'id' => 'resofcontratovaf-form',
	'enableAjaxValidation' => false,
));
?>



	<?php echo $form->errorSummary($model); ?>
		
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
		<?php echo $form->labelEx($model,'numRes'); ?>
		<?php echo $form->textField($model, 'numRes', array('maxlength' => 45)); ?>
		<?php echo $form->error($model,'numRes'); ?>
		</div><!-- row -->
		
		<div class="row">
		<?php echo $form->labelEx($model,'fechaNumRes'); ?>
		<?php $this->widget('zii.widgets.jui.CJuiDatePicker', array(
			'model'=>$model,
			'attribute'=>'fechaNumRes',
			
			// additional javascript options for the date picker plugin
			'options'=>array(
				'showAnim'=>'fold',
				'dateFormat'=>'yy-mm-dd',
			),
			'htmlOptions'=>array(
				'style'=>'height:20px;'
			),
		));?>
		<?php echo $form->error($model,'fechaNumRes'); ?>
		</div><!-- row -->
		
		<div class="row">
		<?php echo $form->labelEx($model,'firma'); ?>
		<?php echo $form->textField($model, 'firma', array('maxlength' => 45)); ?>
		<?php echo $form->error($model,'firma'); ?>
		</div><!-- row -->
				
		<div class="row">
		<?php echo $form->labelEx($model,'fechaFirma'); ?>
		<?php $this->widget('zii.widgets.jui.CJuiDatePicker', array(
			'model'=>$model,
			'attribute'=>'fechaFirma',
			
			// additional javascript options for the date picker plugin
			'options'=>array(
				'showAnim'=>'fold',
				'dateFormat'=>'yy-mm-dd',
			),
			'htmlOptions'=>array(
				'style'=>'height:20px;'
			),
		));?>
		<?php echo $form->error($model,'fechaFirma'); ?>
		</div><!-- row -->
		
		
<?php
echo GxHtml::submitButton(Yii::t('app', 'Guardar'));
$this->endWidget();
?>
</div><!-- form -->