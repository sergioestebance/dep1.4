<div class="view">

	<?php echo GxHtml::encode($data->getAttributeLabel('id')); ?>:
	<?php echo GxHtml::link(GxHtml::encode($data->id), array('view', 'id' => $data->id)); ?>
	<br />

	<?php echo GxHtml::encode($data->getAttributeLabel('procesogasto_id')); ?>:
		<?php echo GxHtml::encode(GxHtml::valueEx($data->procesogasto)); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('item')); ?>:
	<?php echo GxHtml::encode($data->item); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('nombrePersona')); ?>:
	<?php echo GxHtml::encode($data->nombrePersona); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('rut')); ?>:
	<?php echo GxHtml::encode($data->rut); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('numConvenio')); ?>:
	<?php echo GxHtml::encode($data->numConvenio); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('fechaInicio')); ?>:
	<?php echo GxHtml::encode($data->fechaInicio); ?>
	<br />
	<?php /*
	<?php echo GxHtml::encode($data->getAttributeLabel('fechaTermino')); ?>:
	<?php echo GxHtml::encode($data->fechaTermino); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('cuotas')); ?>:
	<?php echo GxHtml::encode($data->cuotas); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('monto')); ?>:
	<?php echo GxHtml::encode($data->monto); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('fechaRecilio')); ?>:
	<?php echo GxHtml::encode($data->fechaRecilio); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('reciliacion')); ?>:
	<?php echo GxHtml::encode($data->reciliacion); ?>
	<br />
	*/ ?>

</div>