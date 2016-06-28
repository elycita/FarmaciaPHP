<?php
/* @var $this CompraController */
/* @var $model Compra */

$this->breadcrumbs=array(
	'Compras'=>array('index'),
	$model->compraID=>array('view','id'=>$model->compraID),
	'Update',
);

$this->menu=array(
	array('label'=>'List Compra', 'url'=>array('index')),
	array('label'=>'Create Compra', 'url'=>array('create')),
	array('label'=>'View Compra', 'url'=>array('view', 'id'=>$model->compraID)),
	array('label'=>'Manage Compra', 'url'=>array('admin')),
);
?>

<h1>Update Compra <?php echo $model->compraID; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>