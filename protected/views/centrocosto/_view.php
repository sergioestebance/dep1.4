<div class="view">

	<?php echo GxHtml::encode($data->getAttributeLabel('id')); ?>:
	<?php echo GxHtml::link(GxHtml::encode($data->id), array('view', 'id' => $data->id)); ?>
	<br />

	<?php echo GxHtml::encode($data->getAttributeLabel('tipoaporte_id')); ?>:
		<?php echo GxHtml::encode(GxHtml::valueEx($data->tipoaporte)); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('nuevo')); ?>:
	<?php echo GxHtml::encode($data->nuevo); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('anterior')); ?>:
	<?php echo GxHtml::encode($data->anterior); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('otro')); ?>:
	<?php echo GxHtml::encode($data->otro); ?>
	<br />

</div>