<?php

/**
 * This is the model class for table "detallecompra".
 *
 * The followings are the available columns in table 'detallecompra':
 * @property integer $detalleCompraID
 * @property integer $Cantidad
 * @property double $PrecioCompra
 * @property integer $compraID
 * @property integer $medicamentoID
 *
 * The followings are the available model relations:
 * @property Compra $compra
 * @property Medicamento $medicamento
 */
class Detallecompra extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'detallecompra';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('detalleCompraID', 'required'),
			array('detalleCompraID, Cantidad, compraID, medicamentoID', 'numerical', 'integerOnly'=>true),
			array('PrecioCompra', 'numerical'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('detalleCompraID, Cantidad, PrecioCompra, compraID, medicamentoID', 'safe', 'on'=>'search'),
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
			'compra' => array(self::BELONGS_TO, 'Compra', 'compraID'),
			'medicamento' => array(self::BELONGS_TO, 'Medicamento', 'medicamentoID'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'detalleCompraID' => 'Detalle Compra',
			'Cantidad' => 'Cantidad',
			'PrecioCompra' => 'Precio Compra',
			'compraID' => 'Compra',
			'medicamentoID' => 'Medicamento',
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

		$criteria->compare('detalleCompraID',$this->detalleCompraID);
		$criteria->compare('Cantidad',$this->Cantidad);
		$criteria->compare('PrecioCompra',$this->PrecioCompra);
		$criteria->compare('compraID',$this->compraID);
		$criteria->compare('medicamentoID',$this->medicamentoID);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Detallecompra the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
