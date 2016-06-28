<?php

/**
 * This is the model class for table "medicamento".
 *
 * The followings are the available columns in table 'medicamento':
 * @property integer $medicamentoID
 * @property string $Nombre
 * @property string $Descripcion
 * @property integer $Cantidad
 * @property double $Precio
 * @property integer $Stock
 * @property integer $StrockMinimo
 * @property integer $StockMaximo
 * @property string $Bajoreceta
 * @property string $FechaVencimiento
 * @property string $UnidadMedida
 * @property integer $categoriaID
 *
 * The followings are the available model relations:
 * @property Detallecompra[] $detallecompras
 * @property Detallepedido[] $detallepedidos
 * @property Categoria $categoria
 */
class Medicamento extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'medicamento';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('medicamentoID', 'required'),
			array('medicamentoID, Cantidad, Stock, StrockMinimo, StockMaximo, categoriaID', 'numerical', 'integerOnly'=>true),
			array('Precio', 'numerical'),
			array('Nombre', 'length', 'max'=>50),
			array('Descripcion', 'length', 'max'=>100),
			array('Bajoreceta', 'length', 'max'=>5),
			array('UnidadMedida', 'length', 'max'=>15),
			array('FechaVencimiento', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('medicamentoID, Nombre, Descripcion, Cantidad, Precio, Stock, StrockMinimo, StockMaximo, Bajoreceta, FechaVencimiento, UnidadMedida, categoriaID', 'safe', 'on'=>'search'),
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
			'detallecompras' => array(self::HAS_MANY, 'Detallecompra', 'medicamentoID'),
			'detallepedidos' => array(self::HAS_MANY, 'Detallepedido', 'medicamentoID'),
			'categoria' => array(self::BELONGS_TO, 'Categoria', 'categoriaID'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'medicamentoID' => 'Medicamento',
			'Nombre' => 'Nombre',
			'Descripcion' => 'Descripcion',
			'Cantidad' => 'Cantidad',
			'Precio' => 'Precio',
			'Stock' => 'Stock',
			'StrockMinimo' => 'Strock Minimo',
			'StockMaximo' => 'Stock Maximo',
			'Bajoreceta' => 'Bajoreceta',
			'FechaVencimiento' => 'Fecha Vencimiento',
			'UnidadMedida' => 'Unidad Medida',
			'categoriaID' => 'Categoria',
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

		$criteria->compare('medicamentoID',$this->medicamentoID);
		$criteria->compare('Nombre',$this->Nombre,true);
		$criteria->compare('Descripcion',$this->Descripcion,true);
		$criteria->compare('Cantidad',$this->Cantidad);
		$criteria->compare('Precio',$this->Precio);
		$criteria->compare('Stock',$this->Stock);
		$criteria->compare('StrockMinimo',$this->StrockMinimo);
		$criteria->compare('StockMaximo',$this->StockMaximo);
		$criteria->compare('Bajoreceta',$this->Bajoreceta,true);
		$criteria->compare('FechaVencimiento',$this->FechaVencimiento,true);
		$criteria->compare('UnidadMedida',$this->UnidadMedida,true);
		$criteria->compare('categoriaID',$this->categoriaID);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Medicamento the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
