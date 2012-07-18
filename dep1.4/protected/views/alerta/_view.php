<div class="view">

	<?php echo GxHtml::encode($data->getAttributeLabel('id')); ?>:
	<?php echo GxHtml::link(GxHtml::encode($data->id), array('view', 'id' => $data->id)); ?>
	<br />

	<?php echo GxHtml::encode($data->getAttributeLabel('mensaje')); ?>:
	<?php echo GxHtml::encode($data->mensaje); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('fechaIngreso')); ?>:
	<?php echo GxHtml::encode($data->fechaIngreso); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('fechaAviso')); ?>:
	<?php echo GxHtml::encode($data->fechaAviso); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('visible')); ?>:
	<?php echo GxHtml::encode($data->visible); ?>
	<br />

</div>