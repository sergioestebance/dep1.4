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
		<?php echo $form->label($model, 'proyecto_id'); ?>
		<?php echo $form->dropDownList($model, 'proyecto_id', GxHtml::listDataEx(Proyecto::model()->findAllAttributes(null, true)), array('prompt' => Yii::t('app', 'All'))); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'item'); ?>
		<?php echo $form->textField($model, 'item', array('maxlength' => 45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'numDocumentoSC'); ?>
		<?php echo $form->textField($model, 'numDocumentoSC', array('maxlength' => 45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'fechaSC'); ?>
		<?php echo $form->textField($model, 'fechaSC'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'numDocumentoOC'); ?>
		<?php echo $form->textField($model, 'numDocumentoOC', array('maxlength' => 45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'fechaOC'); ?>
		<?php echo $form->textField($model, 'fechaOC'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'tipoDocumentoDP'); ?>
		<?php echo $form->textField($model, 'tipoDocumentoDP', array('maxlength' => 45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'numDocumentoDP'); ?>
		<?php echo $form->textField($model, 'numDocumentoDP', array('maxlength' => 45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'fechaDP'); ?>
		<?php echo $form->textField($model, 'fechaDP'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'numComprobanteEI'); ?>
		<?php echo $form->textField($model, 'numComprobanteEI', array('maxlength' => 45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'fechaEI'); ?>
		<?php echo $form->textField($model, 'fechaEI'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'numOrdenPagoEI'); ?>
		<?php echo $form->textField($model, 'numOrdenPagoEI'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'tipoDocumentoFB'); ?>
		<?php echo $form->textField($model, 'tipoDocumentoFB', array('maxlength' => 45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'numDocumentoFB'); ?>
		<?php echo $form->textField($model, 'numDocumentoFB', array('maxlength' => 45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'rutProveedorFB'); ?>
		<?php echo $form->textField($model, 'rutProveedorFB', array('maxlength' => 45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'fechaFB'); ?>
		<?php echo $form->textField($model, 'fechaFB'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'fechaCancelacionFB'); ?>
		<?php echo $form->textField($model, 'fechaCancelacionFB'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'detalleDocumentoFB'); ?>
		<?php echo $form->textField($model, 'detalleDocumentoFB', array('maxlength' => 200)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'valorCanceladoFB'); ?>
		<?php echo $form->textField($model, 'valorCanceladoFB', array('maxlength' => 45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'observacion1FB'); ?>
		<?php echo $form->textField($model, 'observacion1FB', array('maxlength' => 200)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'procesosFB'); ?>
		<?php echo $form->textField($model, 'procesosFB', array('maxlength' => 200)); ?>
	</div>

	<div class="row buttons">
		<?php echo GxHtml::submitButton(Yii::t('app', 'Search')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->
