<?php

/**
 * This is the model base class for the table "asesorjuridico".
 * DO NOT MODIFY THIS FILE! It is automatically generated by giix.
 * If any changes are necessary, you must set or override the required
 * property or method in class "Asesorjuridico".
 *
 * Columns in table "asesorjuridico" available as properties of the model,
 * followed by relations of table "asesorjuridico" available as properties of the model.
 *
 * @property integer $id
 * @property integer $controlseguimiento_id
 * @property string $fechaConfeccionContrato
 * @property string $observacion
 * @property string $fechaRespuesta
 * @property integer $alerta
 *
 * @property Controlseguimiento $controlseguimiento
 */
abstract class BaseAsesorjuridico extends GxActiveRecord {

	public static function model($className=__CLASS__) {
		return parent::model($className);
	}

	public function tableName() {
		return 'asesorjuridico';
	}

	public static function label($n = 1) {
		return Yii::t('app', 'Asesorjuridico|Asesorjuridicos', $n);
	}

	public static function representingColumn() {
		return 'fechaConfeccionContrato';
	}

	public function rules() {
		return array(
			array('controlseguimiento_id, alerta', 'numerical', 'integerOnly'=>true),
			array('observacion', 'length', 'max'=>200),
			array('fechaConfeccionContrato, fechaRespuesta', 'safe'),
			array('controlseguimiento_id, fechaConfeccionContrato, observacion, fechaRespuesta, alerta', 'default', 'setOnEmpty' => true, 'value' => null),
			array('id, controlseguimiento_id, fechaConfeccionContrato, observacion, fechaRespuesta, alerta', 'safe', 'on'=>'search'),
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
			'fechaConfeccionContrato' => Yii::t('app', 'Fecha Confeccion Contrato'),
			'observacion' => Yii::t('app', 'Observacion'),
			'fechaRespuesta' => Yii::t('app', 'Fecha Respuesta'),
			'alerta' => Yii::t('app', 'Alerta'),
			'controlseguimiento' => null,
		);
	}

	public function search() {
		$criteria = new CDbCriteria;

		$criteria->compare('id', $this->id);
		$criteria->compare('controlseguimiento_id', $this->controlseguimiento_id);
		$criteria->compare('fechaConfeccionContrato', $this->fechaConfeccionContrato, true);
		$criteria->compare('observacion', $this->observacion, true);
		$criteria->compare('fechaRespuesta', $this->fechaRespuesta, true);
		$criteria->compare('alerta', $this->alerta);

		return new CActiveDataProvider($this, array(
			'criteria' => $criteria,
		));
	}
}