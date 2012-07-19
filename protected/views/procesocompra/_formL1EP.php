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

	<p class="note">
		<?php echo Yii::t('app', 'Campos con'); ?> <span class="required">*</span> <?php echo Yii::t('app', 'son obligatorios'); ?>.
	</p>

	<?php echo $form->errorSummary($model); ?>

		<div class="row">
		<?php echo $form->labelEx($model,'subitem_id'); ?>
		<?php echo $form->dropDownList($model, 'subitem_id', GxHtml::listDataEx(Subitem::model()->findAllAttributes(null, true))); ?>
		<?php echo $form->error($model,'subitem_id'); ?>
		</div><!-- row -->
		
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
		<?php echo $form->textField($model, 'caracteristicas', array('maxlength' => 45, 'size'=>45)); ?>
		<?php echo $form->error($model,'caracteristicas'); ?>
		</div><!-- row -->
		
		<?php $this->beginWidget('zii.widgets.jui.CJuiDialog', array(
        'id' => 'pc-detail-td',
        'options' => array(
            'title' => 'Detalles de Proceso compra',
            'closeOnEscape' => true,
            'autoOpen' => false,
            'model' => false,
            'width' => 850,
            'height' => 450,
			),
		)); ?>
		<div id="TD-section">
		
		
	
		<?php echo $form->labelEx($model,'fechaTD'); ?>
		<?php echo $form->textField($model, 'fechaTD'); ?>
		<?php echo $form->error($model,'fechaTD'); ?>
	
	
		<?php echo $form->labelEx($model,'numeroidTD'); ?>
		<?php echo $form->textField($model, 'numeroidTD', array('maxlength' => 45)); ?>
		<?php echo $form->error($model,'numeroidTD'); ?>

	
		<?php echo $form->labelEx($model,'observacionTD'); ?>
		<?php echo $form->textField($model, 'observacionTD', array('maxlength' => 200)); ?>
		<?php echo $form->error($model,'observacionTD'); ?>
		<br><br>
		<?php $this->widget('zii.widgets.jui.CJuiTabs', array(
			'tabs' => array(
				'Peticion ET' => 'Content for tab 1',
				'Ingreso ET' => array('content' => 'Content for tab 2', 'id' => 'tab6'),
				'Elab. Trato Directo' => array('content' => 'Content for tab 2', 'id' => 'tab7'),
				'Solicitud Compra' =>array('content' => 'Content for tab 2', 'id' => 'tab7'),//$this->renderPartial("_formSC", array('model' => new Solicitudcompra), $this),
				'Envio Base' => array('content' => 'Content for tab 2', 'id' => 'tab8'),
				'Adquisicion' => array('content' => 'Content for tab 2', 'id' => 'tab9'),
			),
		));?>
		
		</div>
		<?php $this->endWidget() ?>
		
		
		<?php $this->beginWidget('zii.widgets.jui.CJuiDialog', array(
        'id' => 'pc-detail',
        'options' => array(
            'title' => 'Detalles de Proceso compra',
            'closeOnEscape' => true,
            'autoOpen' => false,
            'model' => false,
            'width' => 800,
            'height' => 450,
			),
		)) ?>
		
		<div id="L1EP-section">
		
		
		<?php echo $form->labelEx($model,'caracteristicas'); ?>
		<?php echo $form->textField($model, 'caracteristicas', array('maxlength' => 200)); ?>
		<?php echo $form->error($model,'caracteristicas'); ?>
		<?php echo $form->labelEx($model,'estado'); ?>
		<?php echo $form->textField($model, 'estado', array('maxlength' => 45)); ?>
		<?php echo $form->error($model,'estado'); ?>
		<?php echo $form->labelEx($model,'fechaBL'); ?>
		<?php echo $form->textField($model, 'fechaBL'); ?>
		<?php echo $form->error($model,'fechaBL'); ?>
		<?php echo $form->labelEx($model,'idBL'); ?>
		<?php echo $form->textField($model, 'idBL', array('maxlength' => 45)); ?>
		<?php echo $form->error($model,'idBL'); ?>
		<br><br>
		<?php $this->widget('zii.widgets.jui.CJuiTabs', array(
			'tabs' => array(
				'Peticion ET' => 'Content for tab 1',
				'Ingreso ET' => array('content' => 'Content for tab 2', 'id' => 'tab2'),
				'Base Licitacion' => array('content' => 'Content for tab 2', 'id' => 'tab3'),
				'Solicitud Compra' => array('ajax' => $this->createUrl('solicitudcompra/create')),
				'Envio Base' => array('content' => 'Content for tab 2', 'id' => 'tab4'),
				'Adquisicion' => array('content' => 'Content for tab 2', 'id' => 'tab5'),
			),
			'options' => array(
				'collapsible' => true,
			),
		));?>
		</div>
		<?php $this->endWidget() ?>
		
		

<?php



echo GxHtml::submitButton(Yii::t('app', 'Guardar'));
$this->endWidget();
?>
</div><!-- form -->