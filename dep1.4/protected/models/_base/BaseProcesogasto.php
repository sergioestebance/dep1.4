<?php

/**
 * This is the model base class for the table "procesogasto".
 * DO NOT MODIFY THIS FILE! It is automatically generated by giix.
 * If any changes are necessary, you must set or override the required
 * property or method in class "Procesogasto".
 *
 * Columns in table "procesogasto" available as properties of the model,
 * followed by relations of table "procesogasto" available as properties of the model.
 *
 * @property integer $id
 * @property integer $subitem_id
 * @property string $tipo
 * @property string $nombre
 * @property string $estado
 *
 * @property Constancia[] $constancias
 * @property Honorario[] $honorarios
 * @property Plantilla[] $plantillas
 * @property Subitem $subitem
 */
abstract class BaseProcesogasto extends GxActiveRecord {

	public static function model($className=__CLASS__) {
		return parent::model($className);
	}

	public function tableName() {
		return 'procesogasto';
	}

	public static function label($n = 1) {
		return Yii::t('app', 'Procesogasto|Procesogastos', $n);
	}

	public static function representingColumn() {
		return 'nombre';
	}

	public function rules() {
		return array(
			array('nombre', 'required'),
			array('subitem_id', 'numerical', 'integerOnly'=>true),
			array('tipo, nombre, estado', 'length', 'max'=>45),
			array('subitem_id, tipo, estado', 'default', 'setOnEmpty' => true, 'value' => null),
			array('id, subitem_id, tipo, nombre, estado', 'safe', 'on'=>'search'),
		);
	}

	public function relations() {
		return array(
			'constancias' => array(self::HAS_MANY, 'Constancia', 'procesogasto_id'),
			'honorarios' => array(self::HAS_MANY, 'Honorario', 'procesogasto_id'),
			'plantillas' => array(self::HAS_MANY, 'Plantilla', 'procesogasto_id'),
			'subitem' => array(self::BELONGS_TO, 'Subitem', 'subitem_id'),
		);
	}

	public function pivotModels() {
		return array(
		);
	}

	public function attributeLabels() {
		return array(
			'id' => Yii::t('app', 'ID'),
			'subitem_id' => null,
			'tipo' => Yii::t('app', 'Tipo'),
			'nombre' => Yii::t('app', 'Nombre'),
			'estado' => Yii::t('app', 'Estado'),
			'constancias' => null,
			'honorarios' => null,
			'plantillas' => null,
			'subitem' => null,
		);
	}

	public function search() {
		$criteria = new CDbCriteria;

		$criteria->compare('id', $this->id);
		$criteria->compare('subitem_id', $this->subitem_id);
		$criteria->compare('tipo', $this->tipo, true);
		$criteria->compare('nombre', $this->nombre, true);
		$criteria->compare('estado', $this->estado, true);

		return new CActiveDataProvider($this, array(
			'criteria' => $criteria,
		));
	}
}