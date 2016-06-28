<?php

/**
 * This is the model class for table "venta".
 *
 * The followings are the available columns in table 'venta':
 * @property integer $ventaID
 * @property string $Fecha
 * @property integer $clienteID
 * @property integer $usuarioID
 *
 * The followings are the available model relations:
 * @property Detallepedido[] $detallepedidos
 * @property Cliente $cliente
 * @property Usuario $usuario
 */
class Venta extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'venta';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('ventaID', 'required'),
			array('ventaID, clienteID, usuarioID', 'numerical', 'integerOnly'=>true),
			array('Fecha', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('ventaID, Fecha, clienteID, usuarioID', 'safe', 'on'=>'search'),
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
			'detallepedidos' => array(self::HAS_MANY, 'Detallepedido', 'ventaID'),
			'cliente' => array(self::BELONGS_TO, 'Cliente', 'clienteID'),
			'usuario' => array(self::BELONGS_TO, 'Usuario', 'usuarioID'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'ventaID' => 'Venta',
			'Fecha' => 'Fecha',
			'clienteID' => 'Cliente',
			'usuarioID' => 'Usuario',
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

		$criteria->compare('ventaID',$this->ventaID);
		$criteria->compare('Fecha',$this->Fecha,true);
		$criteria->compare('clienteID',$this->clienteID);
		$criteria->compare('usuarioID',$this->usuarioID);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Venta the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
