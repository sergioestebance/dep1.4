<?php

Yii::import('application.models._base.BaseEnviobase');

class Enviobase extends BaseEnviobase
{
	public static function model($className=__CLASS__) {
		return parent::model($className);
	}
}