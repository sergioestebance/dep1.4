<div class="view">

	<?php echo GxHtml::encode($data->getAttributeLabel('id')); ?>:
	<?php echo GxHtml::link(GxHtml::encode($data->id), array('view', 'id' => $data->id)); ?>
	<br />

	<?php echo GxHtml::encode($data->getAttributeLabel('subitem_id')); ?>:
		<?php echo GxHtml::encode(GxHtml::valueEx($data->subitem)); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('nombre')); ?>:
	<?php echo GxHtml::encode($data->nombre); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('sigla')); ?>:
	<?php echo GxHtml::encode($data->sigla); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('caracteristicas')); ?>:
	<?php echo GxHtml::encode($data->caracteristicas); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('estado')); ?>:
	<?php echo GxHtml::encode($data->estado); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('fechaBL')); ?>:
	<?php echo GxHtml::encode($data->fechaBL); ?>
	<br />
	<?php /*
	<?php echo GxHtml::encode($data->getAttributeLabel('idBL')); ?>:
	<?php echo GxHtml::encode($data->idBL); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('fechaTD')); ?>:
	<?php echo GxHtml::encode($data->fechaTD); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('numeroidTD')); ?>:
	<?php echo GxHtml::encode($data->numeroidTD); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('observacionTD')); ?>:
	<?php echo GxHtml::encode($data->observacionTD); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('tipo')); ?>:
	<?php echo GxHtml::encode($data->tipo); ?>
	<br />
	*/ ?>

</div>