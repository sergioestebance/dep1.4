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
		<?php echo $form->label($model, 'controlseguimiento_id'); ?>
		<?php echo $form->dropDownList($model, 'controlseguimiento_id', GxHtml::listDataEx(Controlseguimiento::model()->findAllAttributes(null, true)), array('prompt' => Yii::t('app', 'All'))); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'fechaCreacion'); ?>
		<?php echo $form->textField($model, 'fechaCreacion'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'estado'); ?>
		<?php echo $form->textField($model, 'estado', array('maxlength' => 45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'fecha1'); ?>
		<?php echo $form->textField($model, 'fecha1'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'observacion1'); ?>
		<?php echo $form->textField($model, 'observacion1', array('maxlength' => 200)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'fecha2'); ?>
		<?php echo $form->textField($model, 'fecha2'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'observacion2'); ?>
		<?php echo $form->textField($model, 'observacion2', array('maxlength' => 200)); ?>
	</div>

	<div class="row buttons">
		<?php echo GxHtml::submitButton(Yii::t('app', 'Search')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->
