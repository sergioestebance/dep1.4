<?php

/**
 * This is the model base class for the table "comisionevaluacion".
 * DO NOT MODIFY THIS FILE! It is automatically generated by giix.
 * If any changes are necessary, you must set or override the required
 * property or method in class "Comisionevaluacion".
 *
 * Columns in table "comisionevaluacion" available as properties of the model,
 * followed by relations of table "comisionevaluacion" available as properties of the model.
 *
 * @property integer $id
 * @property integer $controlseguimiento_id
 * @property string $estado
 * @property string $fecha
 * @property string $observacion
 *
 * @property Controlseguimiento $controlseguimiento
 */
abstract class BaseComisionevaluacion extends GxActiveRecord {

	public static function model($className=__CLASS__) {
		return parent::model($className);
	}

	public function tableName() {
		return 'comisionevaluacion';
	}

	public static function label($n = 1) {
		return Yii::t('app', 'Comisionevaluacion|Comisionevaluacions', $n);
	}

	public static function representingColumn() {
		return 'estado';
	}

	public function rules() {
		return array(
			array('controlseguimiento_id', 'numerical', 'integerOnly'=>true),
			array('estado', 'length', 'max'=>45),
			array('observacion', 'length', 'max'=>200),
			array('fecha', 'safe'),
			array('controlseguimiento_id, estado, fecha, observacion', 'default', 'setOnEmpty' => true, 'value' => null),
			array('id, controlseguimiento_id, estado, fecha, observacion', 'safe', 'on'=>'search'),
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
			'estado' => Yii::t('app', 'Estado'),
			'fecha' => Yii::t('app', 'Fecha'),
			'observacion' => Yii::t('app', 'Observacion'),
			'controlseguimiento' => null,
		);
	}

	public function search() {
		$criteria = new CDbCriteria;

		$criteria->compare('id', $this->id);
		$criteria->compare('controlseguimiento_id', $this->controlseguimiento_id);
		$criteria->compare('estado', $this->estado, true);
		$criteria->compare('fecha', $this->fecha, true);
		$criteria->compare('observacion', $this->observacion, true);

		return new CActiveDataProvider($this, array(
			'criteria' => $criteria,
		));
	}
}