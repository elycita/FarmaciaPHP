<?php
/* @var $this ProveedorController */
/* @var $model Proveedor */

$this->breadcrumbs=array(
	'Proveedors'=>array('index'),
	$model->proveedorID=>array('view','id'=>$model->proveedorID),
	'Update',
);

$this->menu=array(
	array('label'=>'List Proveedor', 'url'=>array('index')),
	array('label'=>'Create Proveedor', 'url'=>array('create')),
	array('label'=>'View Proveedor', 'url'=>array('view', 'id'=>$model->proveedorID)),
	array('label'=>'Manage Proveedor', 'url'=>array('admin')),
);
?>

<h1>Update Proveedor <?php echo $model->proveedorID; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>