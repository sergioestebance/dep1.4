<div class="view">

	<?php echo GxHtml::encode($data->getAttributeLabel('id')); ?>:
	<?php echo GxHtml::link(GxHtml::encode($data->id), array('view', 'id' => $data->id)); ?>
	<br />

	<?php echo GxHtml::encode($data->getAttributeLabel('proyecto_id')); ?>:
		<?php echo GxHtml::encode(GxHtml::valueEx($data->proyecto)); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('tipoaporte_id')); ?>:
		<?php echo GxHtml::encode(GxHtml::valueEx($data->tipoaporte)); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('item_id')); ?>:
		<?php echo GxHtml::encode(GxHtml::valueEx($data->item)); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('centrocosto_id')); ?>:
		<?php echo GxHtml::encode(GxHtml::valueEx($data->centrocosto)); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('codigo')); ?>:
	<?php echo GxHtml::encode($data->codigo); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('descripcion')); ?>:
	<?php echo GxHtml::encode($data->descripcion); ?>
	<br />
	<?php /*
	<?php echo GxHtml::encode($data->getAttributeLabel('cantidad')); ?>:
	<?php echo GxHtml::encode($data->cantidad); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('costoUnitario')); ?>:
	<?php echo GxHtml::encode($data->costoUnitario); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('montos')); ?>:
	<?php echo GxHtml::encode($data->montos); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('correlativo')); ?>:
	<?php echo GxHtml::encode($data->correlativo); ?>
	<br />
	*/ ?>

</div>