<?php

Yii::import('application.models._base.BaseItem');

class Item extends BaseItem
{
	public static function model($className=__CLASS__) {
		return parent::model($className);
	}
}