<div class="view">

	<?php echo GxHtml::encode($data->getAttributeLabel('id')); ?>:
	<?php echo GxHtml::link(GxHtml::encode($data->id), array('view', 'id' => $data->id)); ?>
	<br />

	<?php echo GxHtml::encode($data->getAttributeLabel('actaAD')); ?>:
	<?php echo GxHtml::encode($data->actaAD); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('numResolucionDA')); ?>:
	<?php echo GxHtml::encode($data->numResolucionDA); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('firmaDA')); ?>:
	<?php echo GxHtml::encode($data->firmaDA); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('controlseguimiento_id')); ?>:
		<?php echo GxHtml::encode(GxHtml::valueEx($data->controlseguimiento)); ?>
	<br />

</div>