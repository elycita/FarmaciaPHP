<?php

/**
 * This is the model class for table "detallepedido".
 *
 * The followings are the available columns in table 'detallepedido':
 * @property integer $detallePedidoID
 * @property integer $Cantidad
 * @property double $PrecioUnitario
 * @property integer $ventaID
 * @property integer $medicamentoID
 *
 * The followings are the available model relations:
 * @property Medicamento $medicamento
 * @property Venta $venta
 */
class Detallepedido extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'detallepedido';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('detallePedidoID', 'required'),
			array('detallePedidoID, Cantidad, ventaID, medicamentoID', 'numerical', 'integerOnly'=>true),
			array('PrecioUnitario', 'numerical'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('detallePedidoID, Cantidad, PrecioUnitario, ventaID, medicamentoID', 'safe', 'on'=>'search'),
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
			'medicamento' => array(self::BELONGS_TO, 'Medicamento', 'medicamentoID'),
			'venta' => array(self::BELONGS_TO, 'Venta', 'ventaID'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'detallePedidoID' => 'Detalle Pedido',
			'Cantidad' => 'Cantidad',
			'PrecioUnitario' => 'Precio Unitario',
			'ventaID' => 'Venta',
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

		$criteria->compare('detallePedidoID',$this->detallePedidoID);
		$criteria->compare('Cantidad',$this->Cantidad);
		$criteria->compare('PrecioUnitario',$this->PrecioUnitario);
		$criteria->compare('ventaID',$this->ventaID);
		$criteria->compare('medicamentoID',$this->medicamentoID);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Detallepedido the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
