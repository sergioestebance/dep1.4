<div class="form">


<?php $form = $this->beginWidget('GxActiveForm', array(
	'id' => 'controlseguimiento-form',
	'enableAjaxValidation' => false,
));
?>

	<p class="note">
		<?php echo Yii::t('app', 'Campos con'); ?> <span class="required">*</span> <?php echo Yii::t('app', 'son obligatorios'); ?>.
	</p>

	<?php echo $form->errorSummary($model); ?>

		<div class="row">
		<?php echo $form->labelEx($model,'procesocompra_id'); ?>
		<?php echo $form->dropDownList($model, 'procesocompra_id', GxHtml::listDataEx(Procesocompra::model()->findAllAttributes(null, true))); ?>
		<?php echo $form->error($model,'procesocompra_id'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'tipo'); ?>
		<?php echo $form->textField($model, 'tipo', array('maxlength' => 45)); ?>
		<?php echo $form->error($model,'tipo'); ?>
		</div><!-- row -->

		<label><?php echo GxHtml::encode($model->getRelationLabel('abogadasecretarias')); ?></label>
		<?php echo $form->checkBoxList($model, 'abogadasecretarias', GxHtml::encodeEx(GxHtml::listDataEx(Abogadasecretaria::model()->findAllAttributes(null, true)), false, true)); ?>
		<label><?php echo GxHtml::encode($model->getRelationLabel('adjudicacions')); ?></label>
		<?php echo $form->checkBoxList($model, 'adjudicacions', GxHtml::encodeEx(GxHtml::listDataEx(Adjudicacion::model()->findAllAttributes(null, true)), false, true)); ?>
		<label><?php echo GxHtml::encode($model->getRelationLabel('ajs')); ?></label>
		<?php echo $form->checkBoxList($model, 'ajs', GxHtml::encodeEx(GxHtml::listDataEx(Aj::model()->findAllAttributes(null, true)), false, true)); ?>
		<label><?php echo GxHtml::encode($model->getRelationLabel('asesorjuridicos')); ?></label>
		<?php echo $form->checkBoxList($model, 'asesorjuridicos', GxHtml::encodeEx(GxHtml::listDataEx(Asesorjuridico::model()->findAllAttributes(null, true)), false, true)); ?>
		<label><?php echo GxHtml::encode($model->getRelationLabel('comisionevaluacions')); ?></label>
		<?php echo $form->checkBoxList($model, 'comisionevaluacions', GxHtml::encodeEx(GxHtml::listDataEx(Comisionevaluacion::model()->findAllAttributes(null, true)), false, true)); ?>
		<label><?php echo GxHtml::encode($model->getRelationLabel('contralorias')); ?></label>
		<?php echo $form->checkBoxList($model, 'contralorias', GxHtml::encodeEx(GxHtml::listDataEx(Contraloria::model()->findAllAttributes(null, true)), false, true)); ?>
		<label><?php echo GxHtml::encode($model->getRelationLabel('directorproyectos')); ?></label>
		<?php echo $form->checkBoxList($model, 'directorproyectos', GxHtml::encodeEx(GxHtml::listDataEx(Directorproyecto::model()->findAllAttributes(null, true)), false, true)); ?>
		<label><?php echo GxHtml::encode($model->getRelationLabel('envinformesevas')); ?></label>
		<?php echo $form->checkBoxList($model, 'envinformesevas', GxHtml::encodeEx(GxHtml::listDataEx(Envinformeseva::model()->findAllAttributes(null, true)), false, true)); ?>
		<label><?php echo GxHtml::encode($model->getRelationLabel('enviocontratofirmas')); ?></label>
		<?php echo $form->checkBoxList($model, 'enviocontratofirmas', GxHtml::encodeEx(GxHtml::listDataEx(Enviocontratofirma::model()->findAllAttributes(null, true)), false, true)); ?>
		<label><?php echo GxHtml::encode($model->getRelationLabel('oficioconductors')); ?></label>
		<?php echo $form->checkBoxList($model, 'oficioconductors', GxHtml::encodeEx(GxHtml::listDataEx(Oficioconductor::model()->findAllAttributes(null, true)), false, true)); ?>
		<label><?php echo GxHtml::encode($model->getRelationLabel('procesoevaluacions')); ?></label>
		<?php echo $form->checkBoxList($model, 'procesoevaluacions', GxHtml::encodeEx(GxHtml::listDataEx(Procesoevaluacion::model()->findAllAttributes(null, true)), false, true)); ?>
		<label><?php echo GxHtml::encode($model->getRelationLabel('publicacions')); ?></label>
		<?php echo $form->checkBoxList($model, 'publicacions', GxHtml::encodeEx(GxHtml::listDataEx(Publicacion::model()->findAllAttributes(null, true)), false, true)); ?>
		<label><?php echo GxHtml::encode($model->getRelationLabel('recinformacionsups')); ?></label>
		<?php echo $form->checkBoxList($model, 'recinformacionsups', GxHtml::encodeEx(GxHtml::listDataEx(Recinformacionsup::model()->findAllAttributes(null, true)), false, true)); ?>
		<label><?php echo GxHtml::encode($model->getRelationLabel('recopilacioninfos')); ?></label>
		<?php echo $form->checkBoxList($model, 'recopilacioninfos', GxHtml::encodeEx(GxHtml::listDataEx(Recopilacioninfo::model()->findAllAttributes(null, true)), false, true)); ?>
		<label><?php echo GxHtml::encode($model->getRelationLabel('resofcontratos')); ?></label>
		<?php echo $form->checkBoxList($model, 'resofcontratos', GxHtml::encodeEx(GxHtml::listDataEx(Resofcontrato::model()->findAllAttributes(null, true)), false, true)); ?>
		<label><?php echo GxHtml::encode($model->getRelationLabel('resofcontratovafs')); ?></label>
		<?php echo $form->checkBoxList($model, 'resofcontratovafs', GxHtml::encodeEx(GxHtml::listDataEx(Resofcontratovaf::model()->findAllAttributes(null, true)), false, true)); ?>
		<label><?php echo GxHtml::encode($model->getRelationLabel('resolucionadlps')); ?></label>
		<?php echo $form->checkBoxList($model, 'resolucionadlps', GxHtml::encodeEx(GxHtml::listDataEx(Resolucionadlp::model()->findAllAttributes(null, true)), false, true)); ?>
		<label><?php echo GxHtml::encode($model->getRelationLabel('resolucionadodes')); ?></label>
		<?php echo $form->checkBoxList($model, 'resolucionadodes', GxHtml::encodeEx(GxHtml::listDataEx(Resolucionadodes::model()->findAllAttributes(null, true)), false, true)); ?>
		<label><?php echo GxHtml::encode($model->getRelationLabel('resolucionofs')); ?></label>
		<?php echo $form->checkBoxList($model, 'resolucionofs', GxHtml::encodeEx(GxHtml::listDataEx(Resolucionof::model()->findAllAttributes(null, true)), false, true)); ?>
		<label><?php echo GxHtml::encode($model->getRelationLabel('resolucionoficializadas')); ?></label>
		<?php echo $form->checkBoxList($model, 'resolucionoficializadas', GxHtml::encodeEx(GxHtml::listDataEx(Resolucionoficializada::model()->findAllAttributes(null, true)), false, true)); ?>
		<label><?php echo GxHtml::encode($model->getRelationLabel('secretarias')); ?></label>
		<?php echo $form->checkBoxList($model, 'secretarias', GxHtml::encodeEx(GxHtml::listDataEx(Secretaria::model()->findAllAttributes(null, true)), false, true)); ?>
		<label><?php echo GxHtml::encode($model->getRelationLabel('vafs')); ?></label>
		<?php echo $form->checkBoxList($model, 'vafs', GxHtml::encodeEx(GxHtml::listDataEx(Vaf::model()->findAllAttributes(null, true)), false, true)); ?>

<?php
echo GxHtml::submitButton(Yii::t('app', 'Guardar'));
$this->endWidget();
?>
</div><!-- form -->