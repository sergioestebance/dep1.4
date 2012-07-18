<?php

/**
 * This is the model base class for the table "envinformeseva".
 * DO NOT MODIFY THIS FILE! It is automatically generated by giix.
 * If any changes are necessary, you must set or override the required
 * property or method in class "Envinformeseva".
 *
 * Columns in table "envinformeseva" available as properties of the model,
 * followed by relations of table "envinformeseva" available as properties of the model.
 *
 * @property integer $id
 * @property integer $controlseguimiento_id
 * @property string $fechaCreacion
 * @property string $estado
 * @property string $fecha1
 * @property string $observacion1
 * @property string $fecha2
 * @property string $observacion2
 *
 * @property Controlseguimiento $controlseguimiento
 */
abstract class BaseEnvinformeseva extends GxActiveRecord {

	public static function model($className=__CLASS__) {
		return parent::model($className);
	}

	public function tableName() {
		return 'envinformeseva';
	}

	public static function label($n = 1) {
		return Yii::t('app', 'Envinformeseva|Envinformesevas', $n);
	}

	public static function representingColumn() {
		return 'fechaCreacion';
	}

	public function rules() {
		return array(
			array('controlseguimiento_id', 'numerical', 'integerOnly'=>true),
			array('estado', 'length', 'max'=>45),
			array('observacion1, observacion2', 'length', 'max'=>200),
			array('fechaCreacion, fecha1, fecha2', 'safe'),
			array('controlseguimiento_id, fechaCreacion, estado, fecha1, observacion1, fecha2, observacion2', 'default', 'setOnEmpty' => true, 'value' => null),
			array('id, controlseguimiento_id, fechaCreacion, estado, fecha1, observacion1, fecha2, observacion2', 'safe', 'on'=>'search'),
		);
	}

	public function relations() {
		return array(
			'controlseguimiento' => array(self::BELONGS_TO, 'Controlseguimiento', 'controlseguimiento_id'),
		);
	}

	public function pivotModels() {
		return array(
		);
	}

	public function attributeLabels() {
		return array(
			'id' => Yii::t('app', 'ID'),
			'controlseguimiento_id' => null,
			'fechaCreacion' => Yii::t('app', 'Fecha Creacion'),
			'estado' => Yii::t('app', 'Estado'),
			'fecha1' => Yii::t('app', 'Fecha1'),
			'observacion1' => Yii::t('app', 'Observacion1'),
			'fecha2' => Yii::t('app', 'Fecha2'),
			'observacion2' => Yii::t('app', 'Observacion2'),
			'controlseguimiento' => null,
		);
	}

	public function search() {
		$criteria = new CDbCriteria;

		$criteria->compare('id', $this->id);
		$criteria->compare('controlseguimiento_id', $this->controlseguimiento_id);
		$criteria->compare('fechaCreacion', $this->fechaCreacion, true);
		$criteria->compare('estado', $this->estado, true);
		$criteria->compare('fecha1', $this->fecha1, true);
		$criteria->compare('observacion1', $this->observacion1, true);
		$criteria->compare('fecha2', $this->fecha2, true);
		$criteria->compare('observacion2', $this->observacion2, true);

		return new CActiveDataProvider($this, array(
			'criteria' => $criteria,
		));
	}
}