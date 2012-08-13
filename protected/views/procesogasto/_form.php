<div class="form">


<?php $form = $this->beginWidget('GxActiveForm', array(
	'id' => 'procesogasto-form',
	'enableAjaxValidation' => false,
));
?>



	<?php echo $form->errorSummary($model); ?>

		<div class="row">
		<?php echo $form->labelEx($model,'subitem_id'); ?>
		<?php echo $form->dropDownList($model, 'subitem_id', GxHtml::listDataEx(Subitem::model()->findAllAttributes(null, true))); ?>
		<?php echo $form->error($model,'subitem_id'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'tipo'); ?>
		<?php echo $form->textField($model, 'tipo', array('maxlength' => 45)); ?>
		<?php echo $form->error($model,'tipo'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'nombre'); ?>
		<?php echo $form->textField($model, 'nombre', array('maxlength' => 45)); ?>
		<?php echo $form->error($model,'nombre'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'estado'); ?>
		<?php echo $form->textField($model, 'estado', array('maxlength' => 45)); ?>
		<?php echo $form->error($model,'estado'); ?>
		</div><!-- row -->

		<label><?php echo GxHtml::encode($model->getRelationLabel('constancias')); ?></label>
		<?php echo $form->checkBoxList($model, 'constancias', GxHtml::encodeEx(GxHtml::listDataEx(Constancia::model()->findAllAttributes(null, true)), false, true)); ?>
		<label><?php echo GxHtml::encode($model->getRelationLabel('honorarios')); ?></label>
		<?php echo $form->checkBoxList($model, 'honorarios', GxHtml::encodeEx(GxHtml::listDataEx(Honorario::model()->findAllAttributes(null, true)), false, true)); ?>
		<label><?php echo GxHtml::encode($model->getRelationLabel('plantillas')); ?></label>
		<?php echo $form->checkBoxList($model, 'plantillas', GxHtml::encodeEx(GxHtml::listDataEx(Plantilla::model()->findAllAttributes(null, true)), false, true)); ?>

<?php
echo GxHtml::submitButton(Yii::t('app', 'Guardar'));
$this->endWidget();
?>
</div><!-- form -->