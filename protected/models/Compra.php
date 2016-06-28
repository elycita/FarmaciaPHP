<?php

/**
 * This is the model class for table "compra".
 *
 * The followings are the available columns in table 'compra':
 * @property integer $compraID
 * @property integer $usuarioID
 * @property integer $proveedorID
 * @property string $FechaCompra
 * @property double $MontoTotal
 * @property double $Descuento
 * @property string $Observacion
 *
 * The followings are the available model relations:
 * @property Proveedor $proveedor
 * @property Usuario $usuario
 * @property Detallecompra[] $detallecompras
 */
class Compra extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'compra';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('compraID', 'required'),
			array('compraID, usuarioID, proveedorID', 'numerical', 'integerOnly'=>true),
			array('MontoTotal, Descuento', 'numerical'),
			array('Observacion', 'length', 'max'=>100),
			array('FechaCompra', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('compraID, usuarioID, proveedorID, FechaCompra, MontoTotal, Descuento, Observacion', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
			'proveedor' => array(self::BELONGS_TO, 'Proveedor', 'proveedorID'),
			'usuario' => array(self::BELONGS_TO, 'Usuario', 'usuarioID'),
			'detallecompras' => array(self::HAS_MANY, 'Detallecompra', 'compraID'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'compraID' => 'Compra',
			'usuarioID' => 'Usuario',
			'proveedorID' => 'Proveedor',
			'FechaCompra' => 'Fecha Compra',
			'MontoTotal' => 'Monto Total',
			'Descuento' => 'Descuento',
			'Observacion' => 'Observacion',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('compraID',$this->compraID);
		$criteria->compare('usuarioID',$this->usuarioID);
		$criteria->compare('proveedorID',$this->proveedorID);
		$criteria->compare('FechaCompra',$this->FechaCompra,true);
		$criteria->compare('MontoTotal',$this->MontoTotal);
		$criteria->compare('Descuento',$this->Descuento);
		$criteria->compare('Observacion',$this->Observacion,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Compra the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
