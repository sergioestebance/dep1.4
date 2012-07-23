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
		<?php echo $form->label($model, 'procesogasto_id'); ?>
		<?php echo $form->dropDownList($model, 'procesogasto_id', GxHtml::listDataEx(Procesogasto::model()->findAllAttributes(null, true)), array('prompt' => Yii::t('app', 'All'))); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'item'); ?>
		<?php echo $form->textField($model, 'item', array('maxlength' => 45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'nombrePersona'); ?>
		<?php echo $form->textField($model, 'nombrePersona', array('maxlength' => 200)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'rut'); ?>
		<?php echo $form->textField($model, 'rut', array('maxlength' => 45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'numConvenio'); ?>
		<?php echo $form->textField($model, 'numConvenio'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'fechaInicio'); ?>
		<?php echo $form->textField($model, 'fechaInicio'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'fechaTermino'); ?>
		<?php echo $form->textField($model, 'fechaTermino'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'cuotas'); ?>
		<?php echo $form->textField($model, 'cuotas'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'monto'); ?>
		<?php echo $form->textField($model, 'monto', array('maxlength' => 45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'fechaRecilio'); ?>
		<?php echo $form->textField($model, 'fechaRecilio'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'reciliacion'); ?>
		<?php echo $form->textField($model, 'reciliacion', array('maxlength' => 45)); ?>
	</div>

	<div class="row buttons">
		<?php echo GxHtml::submitButton(Yii::t('app', 'Buscar')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->
