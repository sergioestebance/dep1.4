<div class="view">

	<?php echo GxHtml::encode($data->getAttributeLabel('id')); ?>:
	<?php echo GxHtml::link(GxHtml::encode($data->id), array('view', 'id' => $data->id)); ?>
	<br />

	<?php echo GxHtml::encode($data->getAttributeLabel('controlseguimiento_id')); ?>:
		<?php echo GxHtml::encode(GxHtml::valueEx($data->controlseguimiento)); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('tipo')); ?>:
	<?php echo GxHtml::encode($data->tipo); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('numResolucionFirmada')); ?>:
	<?php echo GxHtml::encode($data->numResolucionFirmada); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('fechaCreacion')); ?>:
	<?php echo GxHtml::encode($data->fechaCreacion); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('fechaEntregaRes')); ?>:
	<?php echo GxHtml::encode($data->fechaEntregaRes); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('observacion')); ?>:
	<?php echo GxHtml::encode($data->observacion); ?>
	<br />
	<?php /*
	<?php echo GxHtml::encode($data->getAttributeLabel('alerta')); ?>:
	<?php echo GxHtml::encode($data->alerta); ?>
	<br />
	*/ ?>

</div>