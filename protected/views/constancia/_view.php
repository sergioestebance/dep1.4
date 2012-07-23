<div class="view">

	<?php echo GxHtml::encode($data->getAttributeLabel('id')); ?>:
	<?php echo GxHtml::link(GxHtml::encode($data->id), array('view', 'id' => $data->id)); ?>
	<br />

	<?php echo GxHtml::encode($data->getAttributeLabel('procesogasto_id')); ?>:
		<?php echo GxHtml::encode(GxHtml::valueEx($data->procesogasto)); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('proyecto_id')); ?>:
		<?php echo GxHtml::encode(GxHtml::valueEx($data->proyecto)); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('item_id')); ?>:
		<?php echo GxHtml::encode(GxHtml::valueEx($data->item)); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('año')); ?>:
	<?php echo GxHtml::encode($data->año); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('mes')); ?>:
	<?php echo GxHtml::encode($data->mes); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('detalleDocumento')); ?>:
	<?php echo GxHtml::encode($data->detalleDocumento); ?>
	<br />
	<?php /*
	<?php echo GxHtml::encode($data->getAttributeLabel('valor')); ?>:
	<?php echo GxHtml::encode($data->valor); ?>
	<br />
	*/ ?>

</div>