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
		<?php echo $form->label($model, 'codigoProyecto'); ?>
		<?php echo $form->textField($model, 'codigoProyecto', array('maxlength' => 45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'nombre'); ?>
		<?php echo $form->textField($model, 'nombre', array('maxlength' => 45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'codigoBip'); ?>
		<?php echo $form->textField($model, 'codigoBip', array('maxlength' => 45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'duracion'); ?>
		<?php echo $form->textField($model, 'duracion', array('maxlength' => 45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'director'); ?>
		<?php echo $form->textField($model, 'director', array('maxlength' => 45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'aporteFic'); ?>
		<?php echo $form->textField($model, 'aporteFic', array('maxlength' => 45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'aporteUtaV'); ?>
		<?php echo $form->textField($model, 'aporteUtaV', array('maxlength' => 45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'aporteUtaP'); ?>
		<?php echo $form->textField($model, 'aporteUtaP', array('maxlength' => 45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'aporteUtaTotal'); ?>
		<?php echo $form->textField($model, 'aporteUtaTotal', array('maxlength' => 45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'aportesOtros'); ?>
		<?php echo $form->textField($model, 'aportesOtros', array('maxlength' => 45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'montoProyecto'); ?>
		<?php echo $form->textField($model, 'montoProyecto', array('maxlength' => 45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'aporteFicAnt'); ?>
		<?php echo $form->textField($model, 'aporteFicAnt'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'porcAporteFic'); ?>
		<?php echo $form->textField($model, 'porcAporteFic'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'porcAporteVal'); ?>
		<?php echo $form->textField($model, 'porcAporteVal'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'porcAportePec'); ?>
		<?php echo $form->textField($model, 'porcAportePec'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'porcAporteExt'); ?>
		<?php echo $form->textField($model, 'porcAporteExt'); ?>
	</div>

	<div class="row buttons">
		<?php echo GxHtml::submitButton(Yii::t('app', 'Buscar')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->
