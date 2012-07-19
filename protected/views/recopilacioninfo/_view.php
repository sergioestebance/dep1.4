<div class="view">

	<?php echo GxHtml::encode($data->getAttributeLabel('id')); ?>:
	<?php echo GxHtml::link(GxHtml::encode($data->id), array('view', 'id' => $data->id)); ?>
	<br />

	<?php echo GxHtml::encode($data->getAttributeLabel('controlseguimiento_id')); ?>:
		<?php echo GxHtml::encode(GxHtml::valueEx($data->controlseguimiento)); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('fase')); ?>:
	<?php echo GxHtml::encode($data->fase); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('fecha1')); ?>:
	<?php echo GxHtml::encode($data->fecha1); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('fecha2')); ?>:
	<?php echo GxHtml::encode($data->fecha2); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('observacion')); ?>:
	<?php echo GxHtml::encode($data->observacion); ?>
	<br />

</div>