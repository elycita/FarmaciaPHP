<?php
/* @var $this CompraController */
/* @var $model Compra */

$this->breadcrumbs=array(
	'Compras'=>array('index'),
	$model->compraID,
);

$this->menu=array(
	array('label'=>'List Compra', 'url'=>array('index')),
	array('label'=>'Create Compra', 'url'=>array('create')),
	array('label'=>'Update Compra', 'url'=>array('update', 'id'=>$model->compraID)),
	array('label'=>'Delete Compra', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->compraID),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Compra', 'url'=>array('admin')),
);
?>

<h1>View Compra #<?php echo $model->compraID; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'compraID',
		'usuarioID',
		'proveedorID',
		'FechaCompra',
		'MontoTotal',
		'Descuento',
		'Observacion',
	),
)); ?>
