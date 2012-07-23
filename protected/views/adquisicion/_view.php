<div class="view">

	<?php echo GxHtml::encode($data->getAttributeLabel('id')); ?>:
	<?php echo GxHtml::link(GxHtml::encode($data->id), array('view', 'id' => $data->id)); ?>
	<br />

	<?php echo GxHtml::encode($data->getAttributeLabel('alerta_id')); ?>:
		<?php echo GxHtml::encode(GxHtml::valueEx($data->alerta0)); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('procesocompra_id')); ?>:
		<?php echo GxHtml::encode(GxHtml::valueEx($data->procesocompra)); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('estado')); ?>:
	<?php echo GxHtml::encode($data->estado); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('fechaCreacion')); ?>:
	<?php echo GxHtml::encode($data->fechaCreacion); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('fechaRespuesta')); ?>:
	<?php echo GxHtml::encode($data->fechaRespuesta); ?>
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