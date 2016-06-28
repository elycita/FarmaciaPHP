<?php
/* @var $this CategoriaController */
/* @var $model Categoria */

$this->breadcrumbs=array(
	'Categorias'=>array('index'),
	$model->categoriaID=>array('view','id'=>$model->categoriaID),
	'Update',
);

$this->menu=array(
	array('label'=>'List Categoria', 'url'=>array('index')),
	array('label'=>'Create Categoria', 'url'=>array('create')),
	array('label'=>'View Categoria', 'url'=>array('view', 'id'=>$model->categoriaID)),
	array('label'=>'Manage Categoria', 'url'=>array('admin')),
);
?>

<h1>Update Categoria <?php echo $model->categoriaID; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>