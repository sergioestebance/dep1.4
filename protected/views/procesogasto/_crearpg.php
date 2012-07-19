<?php
Yii::app()->clientScript->registerScriptFile(
        Yii::app()->baseUrl . '/js/proceso_gasto.js',
	CClientScript::POS_END);?>


<div class="form">
<?php 

$form = $this->beginWidget('GxActiveForm', array(
	'id' => 'procesogasto-form',
	'enableAjaxValidation' => false,
));
?>
	<?php echo $form->errorSummary($model); ?>

		<div class="row">
		<?php echo $form->labelEx($model,'tipo'); ?>
		<?php echo $form->dropDownList($model, 'tipo',array('SARC' => 'SARC', 'HON' => 'HON', 'CONT' => 'CONT', 'VIAT'=>'VIAT'),
										array(
											'empty'=>'Elegir tipo',
											'onchange'=>'
											CargarPG($(this).val());											
											return false;',
											)); ?>
		<?php echo $form->error($model,'tipo'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'nombre'); ?>
		<?php echo $form->textField($model, 'nombre', array('maxlength' => 45)); ?>
		<?php echo $form->error($model,'nombre'); ?>
		</div><!-- row -->

		
<?php
echo GxHtml::submitButton(Yii::t('app', 'Save'));
$this->endWidget();
?>
</div><!-- form -->