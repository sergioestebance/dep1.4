<div class="view">

	<?php echo GxHtml::encode($data->getAttributeLabel('id')); ?>:
	<?php echo GxHtml::link(GxHtml::encode($data->id), array('view', 'id' => $data->id)); ?>
	<br />

	<?php echo GxHtml::encode($data->getAttributeLabel('procesogasto_id')); ?>:
		<?php echo GxHtml::encode(GxHtml::valueEx($data->procesogasto)); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('proyecto_id')); ?>:
		<?php echo GxHtml::encode(GxHtml::valueEx($data->proyecto)); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('item')); ?>:
	<?php echo GxHtml::encode($data->item); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('numDocumentoSC')); ?>:
	<?php echo GxHtml::encode($data->numDocumentoSC); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('fechaSC')); ?>:
	<?php echo GxHtml::encode($data->fechaSC); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('numDocumentoOC')); ?>:
	<?php echo GxHtml::encode($data->numDocumentoOC); ?>
	<br />
	<?php /*
	<?php echo GxHtml::encode($data->getAttributeLabel('fechaOC')); ?>:
	<?php echo GxHtml::encode($data->fechaOC); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('tipoDocumentoDP')); ?>:
	<?php echo GxHtml::encode($data->tipoDocumentoDP); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('numDocumentoDP')); ?>:
	<?php echo GxHtml::encode($data->numDocumentoDP); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('fechaDP')); ?>:
	<?php echo GxHtml::encode($data->fechaDP); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('numComprobanteEI')); ?>:
	<?php echo GxHtml::encode($data->numComprobanteEI); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('fechaEI')); ?>:
	<?php echo GxHtml::encode($data->fechaEI); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('numOrdenPagoEI')); ?>:
	<?php echo GxHtml::encode($data->numOrdenPagoEI); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('tipoDocumentoFB')); ?>:
	<?php echo GxHtml::encode($data->tipoDocumentoFB); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('numDocumentoFB')); ?>:
	<?php echo GxHtml::encode($data->numDocumentoFB); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('rutProveedorFB')); ?>:
	<?php echo GxHtml::encode($data->rutProveedorFB); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('fechaFB')); ?>:
	<?php echo GxHtml::encode($data->fechaFB); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('fechaCancelacionFB')); ?>:
	<?php echo GxHtml::encode($data->fechaCancelacionFB); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('detalleDocumentoFB')); ?>:
	<?php echo GxHtml::encode($data->detalleDocumentoFB); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('valorCanceladoFB')); ?>:
	<?php echo GxHtml::encode($data->valorCanceladoFB); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('observacion1FB')); ?>:
	<?php echo GxHtml::encode($data->observacion1FB); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('procesosFB')); ?>:
	<?php echo GxHtml::encode($data->procesosFB); ?>
	<br />
	*/ ?>

</div>