<?php

/**
 * This is the model base class for the table "enviobase".
 * DO NOT MODIFY THIS FILE! It is automatically generated by giix.
 * If any changes are necessary, you must set or override the required
 * property or method in class "Enviobase".
 *
 * Columns in table "enviobase" available as properties of the model,
 * followed by relations of table "enviobase" available as properties of the model.
 *
 * @property integer $id
 * @property integer $procesocompra_id
 * @property string $fecha
 * @property string $nombreSupervisor
 * @property string $estado
 *
 * @property Procesocompra $procesocompra
 */
abstract class BaseEnviobase extends GxActiveRecord {

	public static function model($className=__CLASS__) {
		return parent::model($className);
	}

	public function tableName() {
		return 'enviobase';
	}

	public static function label($n = 1) {
		return Yii::t('app', 'Enviobase|Enviobases', $n);
	}

	public static function representingColumn() {
		return 'fecha';
	}

	public function rules() {
		return array(
			array('procesocompra_id', 'numerical', 'integerOnly'=>true),
			array('nombreSupervisor, estado', 'length', 'max'=>45),
			array('fecha', 'safe'),
			array('procesocompra_id, fecha, nombreSupervisor, estado', 'default', 'setOnEmpty' => true, 'value' => null),
			array('id, procesocompra_id, fecha, nombreSupervisor, estado', 'safe', 'on'=>'search'),
		);
	}

	public function relations() {
		return array(
			'procesocompra' => array(self::BELONGS_TO, 'Procesocompra', 'procesocompra_id'),
		);
	}

	public function pivotModels() {
		return array(
		);
	}

	public function attributeLabels() {
		return array(
			'id' => Yii::t('app', 'ID'),
			'procesocompra_id' => null,
			'fecha' => Yii::t('app', 'Fecha'),
			'nombreSupervisor' => Yii::t('app', 'Nombre Supervisor'),
			'estado' => Yii::t('app', 'Estado'),
			'procesocompra' => null,
		);
	}

	public function search() {
		$criteria = new CDbCriteria;

		$criteria->compare('id', $this->id);
		$criteria->compare('procesocompra_id', $this->procesocompra_id);
		$criteria->compare('fecha', $this->fecha, true);
		$criteria->compare('nombreSupervisor', $this->nombreSupervisor, true);
		$criteria->compare('estado', $this->estado, true);

		return new CActiveDataProvider($this, array(
			'criteria' => $criteria,
		));
	}
}