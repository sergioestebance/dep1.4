<?php echo GxHtml::encode($model->codigo); ?>
<?php
	
	echo GxHtml::openTag('ul');
	foreach($model->procesocompras as $relatedModel) {
		echo GxHtml::openTag('li');
		echo GxHtml::link(GxHtml::encode(GxHtml::valueEx($relatedModel)), array('procesocompra/view', 'id' => GxActiveRecord::extractPkValue($relatedModel, true)));
		echo GxHtml::closeTag('li');
	}
	echo GxHtml::closeTag('ul');

?>
