<?php

/**
 * This is the model base class for the table "resolucionadlp".
 * DO NOT MODIFY THIS FILE! It is automatically generated by giix.
 * If any changes are necessary, you must set or override the required
 * property or method in class "Resolucionadlp".
 *
 * Columns in table "resolucionadlp" available as properties of the model,
 * followed by relations of table "resolucionadlp" available as properties of the model.
 *
 * @property integer $id
 * @property string $actaAD
 * @property string $numResolucionDA
 * @property string $firmaDA
 * @property integer $controlseguimiento_id
 *
 * @property Controlseguimiento $controlseguimiento
 */
abstract class BaseResolucionadlp extends GxActiveRecord {

	public static function model($className=__CLASS__) {
		return parent::model($className);
	}

	public function tableName() {
		return 'resolucionadlp';
	}

	public static function label($n = 1) {
		return Yii::t('app', 'Resolucionadlp|Resolucionadlps', $n);
	}

	public static function representingColumn() {
		return 'actaAD';
	}

	public function rules() {
		return array(
			array('controlseguimiento_id', 'numerical', 'integerOnly'=>true),
			array('actaAD, numResolucionDA, firmaDA', 'length', 'max'=>45),
			array('actaAD, numResolucionDA, firmaDA, controlseguimiento_id', 'default', 'setOnEmpty' => true, 'value' => null),
			array('id, actaAD, numResolucionDA, firmaDA, controlseguimiento_id', 'safe', 'on'=>'search'),
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
			'actaAD' => Yii::t('app', 'Acta Ad'),
			'numResolucionDA' => Yii::t('app', 'Num Resolucion Da'),
			'firmaDA' => Yii::t('app', 'Firma Da'),
			'controlseguimiento_id' => null,
			'controlseguimiento' => null,
		);
	}

	public function search() {
		$criteria = new CDbCriteria;

		$criteria->compare('id', $this->id);
		$criteria->compare('actaAD', $this->actaAD, true);
		$criteria->compare('numResolucionDA', $this->numResolucionDA, true);
		$criteria->compare('firmaDA', $this->firmaDA, true);
		$criteria->compare('controlseguimiento_id', $this->controlseguimiento_id);

		return new CActiveDataProvider($this, array(
			'criteria' => $criteria,
		));
	}
}