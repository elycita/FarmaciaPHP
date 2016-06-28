<?php
/* @var $this DetallecompraController */
/* @var $model Detallecompra */

$this->breadcrumbs=array(
	'Detallecompras'=>array('index'),
	$model->detalleCompraID=>array('view','id'=>$model->detalleCompraID),
	'Update',
);

$this->menu=array(
	array('label'=>'List Detallecompra', 'url'=>array('index')),
	array('label'=>'Create Detallecompra', 'url'=>array('create')),
	array('label'=>'View Detallecompra', 'url'=>array('view', 'id'=>$model->detalleCompraID)),
	array('label'=>'Manage Detallecompra', 'url'=>array('admin')),
);
?>

<h1>Update Detallecompra <?php echo $model->detalleCompraID; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>