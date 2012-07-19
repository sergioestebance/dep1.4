<div class="view">

	<?php echo GxHtml::encode($data->getAttributeLabel('id')); ?>:
	<?php echo GxHtml::link(GxHtml::encode($data->id), array('view', 'id' => $data->id)); ?>
	<br />

	<?php echo GxHtml::encode($data->getAttributeLabel('procesocompra_id')); ?>:
		<?php echo GxHtml::encode(GxHtml::valueEx($data->procesocompra)); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('numSolicitud')); ?>:
	<?php echo GxHtml::encode($data->numSolicitud); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('fecha')); ?>:
	<?php echo GxHtml::encode($data->fecha); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('descripcion')); ?>:
	<?php echo GxHtml::encode($data->descripcion); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('monto')); ?>:
	<?php echo GxHtml::encode($data->monto); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('saldo')); ?>:
	<?php echo GxHtml::encode($data->saldo); ?>
	<br />
	<?php /*
	<?php echo GxHtml::encode($data->getAttributeLabel('fechaFirma')); ?>:
	<?php echo GxHtml::encode($data->fechaFirma); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('itemAntiguo')); ?>:
	<?php echo GxHtml::encode($data->itemAntiguo); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('itemNuevo')); ?>:
	<?php echo GxHtml::encode($data->itemNuevo); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('estado')); ?>:
	<?php echo GxHtml::encode($data->estado); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('fechaEstado')); ?>:
	<?php echo GxHtml::encode($data->fechaEstado); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('observacion')); ?>:
	<?php echo GxHtml::encode($data->observacion); ?>
	<br />
	*/ ?>

</div>