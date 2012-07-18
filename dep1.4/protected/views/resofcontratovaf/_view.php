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
	<?php echo GxHtml::encode($data->getAttributeLabel('numRes')); ?>:
	<?php echo GxHtml::encode($data->numRes); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('fechaNumRes')); ?>:
	<?php echo GxHtml::encode($data->fechaNumRes); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('alerta1')); ?>:
	<?php echo GxHtml::encode($data->alerta1); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('firma')); ?>:
	<?php echo GxHtml::encode($data->firma); ?>
	<br />
	<?php /*
	<?php echo GxHtml::encode($data->getAttributeLabel('fechaFirma')); ?>:
	<?php echo GxHtml::encode($data->fechaFirma); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('alerta2')); ?>:
	<?php echo GxHtml::encode($data->alerta2); ?>
	<br />
	*/ ?>

</div>