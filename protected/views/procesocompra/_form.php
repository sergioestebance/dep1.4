<?php
Yii::app()->clientScript->registerScriptFile(
        Yii::app()->baseUrl . '/js/proceso_compra.js',
	CClientScript::POS_END);?>

<div class="form">

<?php $form = $this->beginWidget('GxActiveForm', array(
	'id' => 'procesocompra-form',
	'enableAjaxValidation' => false,
));
?>


	<?php echo $form->errorSummary($model); ?>

		<!-- <div class="row">
		<?php echo $form->labelEx($model,'subitem_id'); ?>
		<?php echo $form->dropDownList($model, 'subitem_id', GxHtml::listDataEx(Subitem::model()->findAllAttributes(null, true))); ?>
		<?php echo $form->error($model,'subitem_id'); ?>
		</div> -- row -->
	
	<div class="row">
		<?php echo $form->labelEx($model_subitem,'id'); ?>
		<?php echo $form->hiddenField($model_subitem,'id',array(
														'size'=>45,
														'maxlength'=>45,
														'value'=>$model_subitem->id)); ?>
		<?php echo CHtml::encode($model_subitem->codigo); ?>											
		<?php echo $form->error($model_subitem,'id'); ?>
	</div>
		
		
		<div class="row">
		<?php echo $form->labelEx($model,'sigla'); ?>
		<?php echo $form->dropDownList($model, 'sigla',array('L1' => 'L1', 'LE' => 'LE', 'LP' => 'LP', 'TD' => 'TD', 'CM' => 'CM', 'ME' => 'ME'),
										 array(
											'empty'=>'Elegir tipo',
											'onchange'=>'
											CargarPC($(this).val());											
											return false;',
											)); ?>
		<?php echo $form->error($model,'sigla'); ?>
		</div><!-- row -->
		
		<div class="row">
		<?php echo $form->labelEx($model,'nombre'); ?>
		<?php echo $form->textField($model, 'nombre', array('maxlength' => 45)); ?>
		<?php echo $form->error($model,'nombre'); ?>	
		</div><!-- row -->
		
		<div class="row">
		<?php echo $form->labelEx($model,'caracteristicas'); ?>
		<?php echo $form->textField($model, 'caracteristicas', array('maxlength' => 200, 'size'=>45)); ?>
		<?php echo $form->error($model,'caracteristicas'); ?>
		</div><!-- row -->
		
<?php
echo GxHtml::submitButton(Yii::t('app', 'Guardar'));
$this->endWidget();
?>
</div><!-- form -->



