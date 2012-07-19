<div class="wide form">

<?php $form = $this->beginWidget('GxActiveForm', array(
	'action' => Yii::app()->createUrl($this->route),
	'method' => 'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model, 'id'); ?>
		<?php echo $form->textField($model, 'id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'mensaje'); ?>
		<?php echo $form->textField($model, 'mensaje', array('maxlength' => 45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'fechaIngreso'); ?>
		<?php echo $form->textField($model, 'fechaIngreso'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'fechaAviso'); ?>
		<?php echo $form->textField($model, 'fechaAviso'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'visible'); ?>
		<?php echo $form->dropDownList($model, 'visible', array('0' => Yii::t('app', 'No'), '1' => Yii::t('app', 'Yes')), array('prompt' => Yii::t('app', 'All'))); ?>
	</div>

	<div class="row buttons">
		<?php echo GxHtml::submitButton(Yii::t('app', 'Buscar')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->
