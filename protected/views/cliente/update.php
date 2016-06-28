<?php
/* @var $this ClienteController */
/* @var $model Cliente */

$this->breadcrumbs=array(
	'Clientes'=>array('index'),
	$model->clienteID=>array('view','id'=>$model->clienteID),
	'Update',
);

$this->menu=array(
	array('label'=>'List Cliente', 'url'=>array('index')),
	array('label'=>'Create Cliente', 'url'=>array('create')),
	array('label'=>'View Cliente', 'url'=>array('view', 'id'=>$model->clienteID)),
	array('label'=>'Manage Cliente', 'url'=>array('admin')),
);
?>

<h1>Update Cliente <?php echo $model->clienteID; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>