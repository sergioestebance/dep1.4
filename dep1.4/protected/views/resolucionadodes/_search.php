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
		<?php echo $form->label($model, 'tipo'); ?>
		<?php echo $form->textField($model, 'tipo', array('maxlength' => 45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'fechaCreacion'); ?>
		<?php echo $form->textField($model, 'fechaCreacion'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'numResolucion'); ?>
		<?php echo $form->textField($model, 'numResolucion', array('maxlength' => 45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'firma'); ?>
		<?php echo $form->textField($model, 'firma', array('maxlength' => 45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'fechaRes'); ?>
		<?php echo $form->textField($model, 'fechaRes'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'fechaFirma'); ?>
		<?php echo $form->textField($model, 'fechaFirma'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'actaAdodes'); ?>
		<?php echo $form->textField($model, 'actaAdodes', array('maxlength' => 45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'fechaActa'); ?>
		<?php echo $form->textField($model, 'fechaActa'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'alerta1'); ?>
		<?php echo $form->textField($model, 'alerta1'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'alerta2'); ?>
		<?php echo $form->textField($model, 'alerta2'); ?>
	</div>

	<div class="row buttons">
		<?php echo GxHtml::submitButton(Yii::t('app', 'Search')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->
