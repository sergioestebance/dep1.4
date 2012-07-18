<div class="view">

	<?php echo GxHtml::encode($data->getAttributeLabel('id')); ?>:
	<?php echo GxHtml::link(GxHtml::encode($data->id), array('view', 'id' => $data->id)); ?>
	<br />

	<?php echo GxHtml::encode($data->getAttributeLabel('procesocompra_id')); ?>:
		<?php echo GxHtml::encode(GxHtml::valueEx($data->procesocompra)); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('alerta_id')); ?>:
		<?php echo GxHtml::encode(GxHtml::valueEx($data->alerta)); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('forma')); ?>:
	<?php echo GxHtml::encode($data->forma); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('fecha')); ?>:
	<?php echo GxHtml::encode($data->fecha); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('observacion1')); ?>:
	<?php echo GxHtml::encode($data->observacion1); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('observacion2')); ?>:
	<?php echo GxHtml::encode($data->observacion2); ?>
	<br />
	<?php /*
	<?php echo GxHtml::encode($data->getAttributeLabel('tipo')); ?>:
	<?php echo GxHtml::encode($data->tipo); ?>
	<br />
	*/ ?>

</div>