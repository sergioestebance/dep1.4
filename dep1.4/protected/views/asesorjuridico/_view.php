<div class="view">

	<?php echo GxHtml::encode($data->getAttributeLabel('id')); ?>:
	<?php echo GxHtml::link(GxHtml::encode($data->id), array('view', 'id' => $data->id)); ?>
	<br />

	<?php echo GxHtml::encode($data->getAttributeLabel('controlseguimiento_id')); ?>:
		<?php echo GxHtml::encode(GxHtml::valueEx($data->controlseguimiento)); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('fechaConfeccionContrato')); ?>:
	<?php echo GxHtml::encode($data->fechaConfeccionContrato); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('observacion')); ?>:
	<?php echo GxHtml::encode($data->observacion); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('fechaRespuesta')); ?>:
	<?php echo GxHtml::encode($data->fechaRespuesta); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('alerta')); ?>:
	<?php echo GxHtml::encode($data->alerta); ?>
	<br />

</div>