 <link rel="stylesheet" href="css/jquery-ui.css" type="text/css" media="all" />
 <link rel="stylesheet" href="css/ui.theme.css" type="text/css" media="all" />
 <script type="text/javaScript" src="js/jquery-1.6.3.min.js"></script>
 <script type="text/javaScript" src="js/jquery-ui.min.js"></script>
 <script src="js/jquery-ui-i18n.min.js" type="text/javascript"></script>
 <script type="text/javaScript" >
 
$(document).ready(function() {

$(function() {
	
		$.datepicker.setDefaults($.datepicker.regional['es']);
		$( "#Adquisicion_fechaRespuesta" ).datepicker({
			showOn: "button",
			buttonImage: "images/calendar_icon.gif", 
			buttonImageOnly: true,
			dateFormat: 'yy-m-d'
		});
	});
});
	
</script>

<div class="form">


<?php $form = $this->beginWidget('GxActiveForm', array(
	'id' => 'adquisicion-form',
	'enableAjaxValidation' => false,
));
?>

	<p class="note">
		<?php echo Yii::t('app', 'Campos con'); ?> <span class="required">*</span> <?php echo Yii::t('app', 'son obligatorios'); ?>.
	</p>

	<?php echo $form->errorSummary($model); ?>

		<div class="row">
		<?php echo $form->hiddenField($model,'procesocompra_id',array('size'=>45,'maxlength'=>45,'value'=>$model_pc->id)); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'fechaCreacion'); ?>
		<?php echo $form->textField($model, 'fechaCreacion',array('value'=>date("Y-m-d H:i:s"),)); ?>
		<?php echo $form->error($model,'fechaCreacion'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'fechaRespuesta'); ?>
		<?php echo $form->textField($model, 'fechaRespuesta',array('value'=>date("Y-m-d H:i:s"),)); ?>
		<?php echo $form->error($model,'fechaRespuesta'); ?>
		</div><!-- row -->
		
		<div class="row">
		<?php echo $form->labelEx($model,'estado'); ?>
		<?php echo $form->dropDownList($model, 'estado',array('ACTIVO' => 'ACTIVO', 'FINALIZADO' => 'FINALIZADO')); ?>
		<?php echo $form->error($model,'estado'); ?>
		</div><!-- row -->
		
		<div class="row">
		<?php echo $form->labelEx($model,'observacion'); ?>
		<?php echo $form->textField($model, 'observacion', array('maxlength' => 200)); ?>
		<?php echo $form->error($model,'observacion'); ?>
		</div><!-- row -->


<?php
echo GxHtml::submitButton(Yii::t('app', 'Guardar'));
$this->endWidget();
?>
</div><!-- form -->