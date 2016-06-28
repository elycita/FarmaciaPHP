<?php

/**
 * This is the model class for table "cliente".
 *
 * The followings are the available columns in table 'cliente':
 * @property integer $clienteID
 * @property string $Nombre
 * @property string $CI_NIT
 * @property string $CorreoElectronico
 * @property integer $Telefono
 *
 * The followings are the available model relations:
 * @property Venta[] $ventas
 */
class Cliente extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'cliente';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('clienteID', 'required'),
			array('clienteID, Telefono', 'numerical', 'integerOnly'=>true),
			array('Nombre, CorreoElectronico', 'length', 'max'=>30),
			array('CI_NIT', 'length', 'max'=>25),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('clienteID, Nombre, CI_NIT, CorreoElectronico, Telefono', 'safe', 'on'=>'search'),
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
			'ventas' => array(self::HAS_MANY, 'Venta', 'clienteID'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'clienteID' => 'Cliente',
			'Nombre' => 'Nombre',
			'CI_NIT' => 'Ci Nit',
			'CorreoElectronico' => 'Correo Electronico',
			'Telefono' => 'Telefono',
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

		$criteria->compare('clienteID',$this->clienteID);
		$criteria->compare('Nombre',$this->Nombre,true);
		$criteria->compare('CI_NIT',$this->CI_NIT,true);
		$criteria->compare('CorreoElectronico',$this->CorreoElectronico,true);
		$criteria->compare('Telefono',$this->Telefono);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Cliente the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
