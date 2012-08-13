 <link rel="stylesheet" href="css/jquery-ui.css" type="text/css" media="all" />
 <link rel="stylesheet" href="css/ui.theme.css" type="text/css" media="all" />
 <script type="text/javaScript" src="js/jquery-1.6.3.min.js"></script>
 <script type="text/javaScript" src="js/jquery-ui.min.js"></script>
 <script src="js/jquery-ui-i18n.min.js" type="text/javascript"></script>
 <script type="text/javaScript" >
 
$(document).ready(function() {

$(function() {
	
		$.datepicker.setDefaults($.datepicker.regional['es']);
		$( "#Enviobase_fecha" ).datepicker({
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
	'id' => 'enviobase-form',
	'enableAjaxValidation' => false,
));
?>



	<?php echo $form->errorSummary($model); ?>


		<div class="row">
		<?php echo $form->hiddenField($model,'procesocompra_id',array('size'=>45,'maxlength'=>45,'value'=>$model_pc->id)); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'fecha'); ?>
		<?php echo $form->textField($model, 'fecha',array('value'=>date("Y-m-d H:i:s"),)); ?>
		<?php echo $form->error($model,'fecha'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'nombreSupervisor'); ?>
		<?php echo $form->textField($model, 'nombreSupervisor', array('maxlength' => 45)); ?>
		<?php echo $form->error($model,'nombreSupervisor'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'estado'); ?>
		<?php echo $form->dropDownList($model, 'estado',array('ACTIVO' => 'ACTIVO', 'FINALIZADO' => 'FINALIZADO')); ?>
		<?php echo $form->error($model,'estado'); ?>
		</div><!-- row -->


<?php
echo GxHtml::submitButton(Yii::t('app', 'Guardar'));
$this->endWidget();
?>
</div><!-- form -->