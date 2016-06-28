<?php
/* @var $this VentaController */
/* @var $model Venta */

$this->breadcrumbs=array(
	'Ventas'=>array('index'),
	$model->ventaID=>array('view','id'=>$model->ventaID),
	'Update',
);

$this->menu=array(
	array('label'=>'List Venta', 'url'=>array('index')),
	array('label'=>'Create Venta', 'url'=>array('create')),
	array('label'=>'View Venta', 'url'=>array('view', 'id'=>$model->ventaID)),
	array('label'=>'Manage Venta', 'url'=>array('admin')),
);
?>

<h1>Update Venta <?php echo $model->ventaID; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>