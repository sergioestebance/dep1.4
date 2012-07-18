<div class="view">

	<?php echo GxHtml::encode($data->getAttributeLabel('idcontraloria')); ?>:
	<?php echo GxHtml::link(GxHtml::encode($data->idcontraloria), array('view', 'id' => $data->idcontraloria)); ?>
	<br />

	<?php echo GxHtml::encode($data->getAttributeLabel('controlseguimiento_id')); ?>:
		<?php echo GxHtml::encode(GxHtml::valueEx($data->controlseguimiento)); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('tipo')); ?>:
	<?php echo GxHtml::encode($data->tipo); ?>
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
	<?php echo GxHtml::encode($data->getAttributeLabel('alertal1')); ?>:
	<?php echo GxHtml::encode($data->alertal1); ?>
	<br />
	<?php /*
	<?php echo GxHtml::encode($data->getAttributeLabel('alerta2')); ?>:
	<?php echo GxHtml::encode($data->alerta2); ?>
	<br />
	*/ ?>

</div>