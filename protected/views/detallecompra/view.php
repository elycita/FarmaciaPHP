<?php
/* @var $this DetallecompraController */
/* @var $model Detallecompra */

$this->breadcrumbs=array(
	'Detallecompras'=>array('index'),
	$model->detalleCompraID,
);

$this->menu=array(
	array('label'=>'List Detallecompra', 'url'=>array('index')),
	array('label'=>'Create Detallecompra', 'url'=>array('create')),
	array('label'=>'Update Detallecompra', 'url'=>array('update', 'id'=>$model->detalleCompraID)),
	array('label'=>'Delete Detallecompra', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->detalleCompraID),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Detallecompra', 'url'=>array('admin')),
);
?>

<h1>View Detallecompra #<?php echo $model->detalleCompraID; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'detalleCompraID',
		'Cantidad',
		'PrecioCompra',
		'compraID',
		'medicamentoID',
	),
)); ?>
