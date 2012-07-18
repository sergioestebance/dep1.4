<div class="view">

	<?php echo GxHtml::encode($data->getAttributeLabel('id')); ?>:
	<?php echo GxHtml::link(GxHtml::encode($data->id), array('view', 'id' => $data->id)); ?>
	<br />

	<?php echo GxHtml::encode($data->getAttributeLabel('controlseguimiento_id')); ?>:
		<?php echo GxHtml::encode(GxHtml::valueEx($data->controlseguimiento)); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('fechaCreacion')); ?>:
	<?php echo GxHtml::encode($data->fechaCreacion); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('estado')); ?>:
	<?php echo GxHtml::encode($data->estado); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('fecha1')); ?>:
	<?php echo GxHtml::encode($data->fecha1); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('observacion1')); ?>:
	<?php echo GxHtml::encode($data->observacion1); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('fecha2')); ?>:
	<?php echo GxHtml::encode($data->fecha2); ?>
	<br />
	<?php /*
	<?php echo GxHtml::encode($data->getAttributeLabel('observacion2')); ?>:
	<?php echo GxHtml::encode($data->observacion2); ?>
	<br />
	*/ ?>

</div>