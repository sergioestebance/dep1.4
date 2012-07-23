<div class="form">


<?php $form = $this->beginWidget('GxActiveForm', array(
	'id' => 'procesocompra-form',
	'enableAjaxValidation' => false,
));
?>

	<p class="note">
		<?php echo Yii::t('app', 'Fields with'); ?> <span class="required">*</span> <?php echo Yii::t('app', 'are required'); ?>.
	</p>

	<?php echo $form->errorSummary($model); ?>

		<div class="row">
		<?php echo $form->labelEx($model,'subitem_id'); ?>
		<?php echo $form->dropDownList($model, 'subitem_id', GxHtml::listDataEx(Subitem::model()->findAllAttributes(null, true))); ?>
		<?php echo $form->error($model,'subitem_id'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'nombre'); ?>
		<?php echo $form->textField($model, 'nombre', array('maxlength' => 45)); ?>
		<?php echo $form->error($model,'nombre'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'sigla'); ?>
		<?php echo $form->textField($model, 'sigla', array('maxlength' => 45)); ?>
		<?php echo $form->error($model,'sigla'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'caracteristicas'); ?>
		<?php echo $form->textField($model, 'caracteristicas', array('maxlength' => 200)); ?>
		<?php echo $form->error($model,'caracteristicas'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'estado'); ?>
		<?php echo $form->textField($model, 'estado', array('maxlength' => 45)); ?>
		<?php echo $form->error($model,'estado'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'fechaBL'); ?>
		<?php echo $form->textField($model, 'fechaBL'); ?>
		<?php echo $form->error($model,'fechaBL'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'idBL'); ?>
		<?php echo $form->textField($model, 'idBL', array('maxlength' => 45)); ?>
		<?php echo $form->error($model,'idBL'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'fechaTD'); ?>
		<?php echo $form->textField($model, 'fechaTD'); ?>
		<?php echo $form->error($model,'fechaTD'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'numeroidTD'); ?>
		<?php echo $form->textField($model, 'numeroidTD', array('maxlength' => 45)); ?>
		<?php echo $form->error($model,'numeroidTD'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'observacionTD'); ?>
		<?php echo $form->textField($model, 'observacionTD', array('maxlength' => 200)); ?>
		<?php echo $form->error($model,'observacionTD'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'tipo'); ?>
		<?php echo $form->textField($model, 'tipo', array('maxlength' => 45)); ?>
		<?php echo $form->error($model,'tipo'); ?>
		</div><!-- row -->

		<label><?php echo GxHtml::encode($model->getRelationLabel('adquisicions')); ?></label>
		<?php echo $form->checkBoxList($model, 'adquisicions', GxHtml::encodeEx(GxHtml::listDataEx(Adquisicion::model()->findAllAttributes(null, true)), false, true)); ?>
		<label><?php echo GxHtml::encode($model->getRelationLabel('controlseguimientos')); ?></label>
		<?php echo $form->checkBoxList($model, 'controlseguimientos', GxHtml::encodeEx(GxHtml::listDataEx(Controlseguimiento::model()->findAllAttributes(null, true)), false, true)); ?>
		<label><?php echo GxHtml::encode($model->getRelationLabel('enviobases')); ?></label>
		<?php echo $form->checkBoxList($model, 'enviobases', GxHtml::encodeEx(GxHtml::listDataEx(Enviobase::model()->findAllAttributes(null, true)), false, true)); ?>
		<label><?php echo GxHtml::encode($model->getRelationLabel('ets')); ?></label>
		<?php echo $form->checkBoxList($model, 'ets', GxHtml::encodeEx(GxHtml::listDataEx(Et::model()->findAllAttributes(null, true)), false, true)); ?>
		<label><?php echo GxHtml::encode($model->getRelationLabel('peticionets')); ?></label>
		<?php echo $form->checkBoxList($model, 'peticionets', GxHtml::encodeEx(GxHtml::listDataEx(Peticionet::model()->findAllAttributes(null, true)), false, true)); ?>
		<label><?php echo GxHtml::encode($model->getRelationLabel('solicitudcompras')); ?></label>
		<?php echo $form->checkBoxList($model, 'solicitudcompras', GxHtml::encodeEx(GxHtml::listDataEx(Solicitudcompra::model()->findAllAttributes(null, true)), false, true)); ?>

<?php
echo GxHtml::submitButton(Yii::t('app', 'Save'));
$this->endWidget();
?>
</div><!-- form -->