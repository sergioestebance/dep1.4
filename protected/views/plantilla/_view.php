<div class="view">

	<?php echo GxHtml::encode($data->getAttributeLabel('id')); ?>:
	<?php echo GxHtml::link(GxHtml::encode($data->id), array('view', 'id' => $data->id)); ?>
	<br />

	<?php echo GxHtml::encode($data->getAttributeLabel('procesogasto_id')); ?>:
		<?php echo GxHtml::encode(GxHtml::valueEx($data->procesogasto)); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('controlseguimiento_id')); ?>:
		<?php echo GxHtml::encode(GxHtml::valueEx($data->controlseguimiento)); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('proyecto_id')); ?>:
		<?php echo GxHtml::encode(GxHtml::valueEx($data->proyecto)); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('item_id')); ?>:
		<?php echo GxHtml::encode(GxHtml::valueEx($data->item)); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('tipoDocumento')); ?>:
	<?php echo GxHtml::encode($data->tipoDocumento); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('numDocumento')); ?>:
	<?php echo GxHtml::encode($data->numDocumento); ?>
	<br />
	<?php /*
	<?php echo GxHtml::encode($data->getAttributeLabel('numComprobanteEI')); ?>:
	<?php echo GxHtml::encode($data->numComprobanteEI); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('fechaEI')); ?>:
	<?php echo GxHtml::encode($data->fechaEI); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('tipoDocumentoFB')); ?>:
	<?php echo GxHtml::encode($data->tipoDocumentoFB); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('numDocumentoFB')); ?>:
	<?php echo GxHtml::encode($data->numDocumentoFB); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('rutProveedor')); ?>:
	<?php echo GxHtml::encode($data->rutProveedor); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('fechaEmisionDoc')); ?>:
	<?php echo GxHtml::encode($data->fechaEmisionDoc); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('fechaCancelacionDoc')); ?>:
	<?php echo GxHtml::encode($data->fechaCancelacionDoc); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('detalleDoc')); ?>:
	<?php echo GxHtml::encode($data->detalleDoc); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('valorTotal')); ?>:
	<?php echo GxHtml::encode($data->valorTotal); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('observacion')); ?>:
	<?php echo GxHtml::encode($data->observacion); ?>
	<br />
	*/ ?>

</div>