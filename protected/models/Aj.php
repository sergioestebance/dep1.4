<?php

Yii::import('application.models._base.BaseAj');

class Aj extends BaseAj
{
	public static function model($className=__CLASS__) {
		return parent::model($className);
	}
}