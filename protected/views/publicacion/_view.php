<div class="view">

	<?php echo GxHtml::encode($data->getAttributeLabel('id')); ?>:
	<?php echo GxHtml::link(GxHtml::encode($data->id), array('view', 'id' => $data->id)); ?>
	<br />

	<?php echo GxHtml::encode($data->getAttributeLabel('controlseguimiento_id')); ?>:
		<?php echo GxHtml::encode(GxHtml::valueEx($data->controlseguimiento)); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('fechaInicio')); ?>:
	<?php echo GxHtml::encode($data->fechaInicio); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('fechaCierre')); ?>:
	<?php echo GxHtml::encode($data->fechaCierre); ?>
	<br />

</div>