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
		<?php echo $form->label($model, 'procesocompra_id'); ?>
		<?php echo $form->dropDownList($model, 'procesocompra_id', GxHtml::listDataEx(Procesocompra::model()->findAllAttributes(null, true)), array('prompt' => Yii::t('app', 'All'))); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'alerta_id'); ?>
		<?php echo $form->dropDownList($model, 'alerta_id', GxHtml::listDataEx(Alerta::model()->findAllAttributes(null, true)), array('prompt' => Yii::t('app', 'All'))); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'forma'); ?>
		<?php echo $form->textField($model, 'forma', array('maxlength' => 45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'fecha'); ?>
		<?php echo $form->textField($model, 'fecha'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'observacion1'); ?>
		<?php echo $form->textField($model, 'observacion1', array('maxlength' => 100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'observacion2'); ?>
		<?php echo $form->textField($model, 'observacion2', array('maxlength' => 100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'alerta'); ?>
		<?php echo $form->textField($model, 'alerta'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'alertal1'); ?>
		<?php echo $form->textField($model, 'alertal1'); ?>
	</div>

	<div class="row buttons">
		<?php echo GxHtml::submitButton(Yii::t('app', 'Search')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->
