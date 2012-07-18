<div class="view">

	<?php echo GxHtml::encode($data->getAttributeLabel('id')); ?>:
	<?php echo GxHtml::link(GxHtml::encode($data->id), array('view', 'id' => $data->id)); ?>
	<br />

	<?php echo GxHtml::encode($data->getAttributeLabel('controlseguimiento_id')); ?>:
		<?php echo GxHtml::encode(GxHtml::valueEx($data->controlseguimiento)); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('tipo')); ?>:
	<?php echo GxHtml::encode($data->tipo); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('fechaCreacion')); ?>:
	<?php echo GxHtml::encode($data->fechaCreacion); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('numResolucion')); ?>:
	<?php echo GxHtml::encode($data->numResolucion); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('firma')); ?>:
	<?php echo GxHtml::encode($data->firma); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('fechaRes')); ?>:
	<?php echo GxHtml::encode($data->fechaRes); ?>
	<br />
	<?php /*
	<?php echo GxHtml::encode($data->getAttributeLabel('fechaFirma')); ?>:
	<?php echo GxHtml::encode($data->fechaFirma); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('actaAdodes')); ?>:
	<?php echo GxHtml::encode($data->actaAdodes); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('fechaActa')); ?>:
	<?php echo GxHtml::encode($data->fechaActa); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('alerta1')); ?>:
	<?php echo GxHtml::encode($data->alerta1); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('alerta2')); ?>:
	<?php echo GxHtml::encode($data->alerta2); ?>
	<br />
	*/ ?>

</div>