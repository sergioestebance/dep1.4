<div class="form">


<?php $form = $this->beginWidget('GxActiveForm', array(
	'id' => 'subitem-form',
	'enableAjaxValidation' => false,
));
?>

	<p class="note">
		<?php echo Yii::t('app', 'Fields with'); ?> <span class="required">*</span> <?php echo Yii::t('app', 'are required'); ?>.
	</p>

	<?php echo $form->errorSummary($model); ?>

		<div class="row">
		<?php echo $form->labelEx($model,'proyecto_id'); ?>
		<?php echo $form->dropDownList($model, 'proyecto_id', GxHtml::listDataEx(Proyecto::model()->findAllAttributes(null, true))); ?>
		<?php echo $form->error($model,'proyecto_id'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'tipoaporte_id'); ?>
		<?php echo $form->dropDownList($model, 'tipoaporte_id', GxHtml::listDataEx(Tipoaporte::model()->findAllAttributes(null, true))); ?>
		<?php echo $form->error($model,'tipoaporte_id'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'item_id'); ?>
		<?php echo $form->dropDownList($model, 'item_id', GxHtml::listDataEx(Item::model()->findAllAttributes(null, true))); ?>
		<?php echo $form->error($model,'item_id'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'centrocosto_id'); ?>
		<?php echo $form->dropDownList($model, 'centrocosto_id', GxHtml::listDataEx(Centrocosto::model()->findAllAttributes(null, true))); ?>
		<?php echo $form->error($model,'centrocosto_id'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'codigo'); ?>
		<?php echo $form->textField($model, 'codigo', array('maxlength' => 45)); ?>
		<?php echo $form->error($model,'codigo'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'descripcion'); ?>
		<?php echo $form->textField($model, 'descripcion', array('maxlength' => 200)); ?>
		<?php echo $form->error($model,'descripcion'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'cantidad'); ?>
		<?php echo $form->textField($model, 'cantidad'); ?>
		<?php echo $form->error($model,'cantidad'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'costoUnitario'); ?>
		<?php echo $form->textField($model, 'costoUnitario', array('maxlength' => 45)); ?>
		<?php echo $form->error($model,'costoUnitario'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'montos'); ?>
		<?php echo $form->textField($model, 'montos', array('maxlength' => 45)); ?>
		<?php echo $form->error($model,'montos'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'correlativo'); ?>
		<?php echo $form->textField($model, 'correlativo'); ?>
		<?php echo $form->error($model,'correlativo'); ?>
		</div><!-- row -->

		<label><?php echo GxHtml::encode($model->getRelationLabel('procesocompras')); ?></label>
		<?php echo $form->checkBoxList($model, 'procesocompras', GxHtml::encodeEx(GxHtml::listDataEx(Procesocompra::model()->findAllAttributes(null, true)), false, true)); ?>
		<label><?php echo GxHtml::encode($model->getRelationLabel('procesogastos')); ?></label>
		<?php echo $form->checkBoxList($model, 'procesogastos', GxHtml::encodeEx(GxHtml::listDataEx(Procesogasto::model()->findAllAttributes(null, true)), false, true)); ?>

<?php
echo GxHtml::submitButton(Yii::t('app', 'Save'));
$this->endWidget();
?>
</div><!-- form -->