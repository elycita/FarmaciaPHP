<?php
/* @var $this DetallecompraController */
/* @var $model Detallecompra */

$this->breadcrumbs=array(
	'Detallecompras'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Detallecompra', 'url'=>array('index')),
	array('label'=>'Create Detallecompra', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#detallecompra-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Gestionar Detallecompras</h1>

<p>
Puede introducir opcionalmente un operador de comparación (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) al principio de cada uno de los valores de búsqueda para especificar la forma de la comparación que quiere realizar.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'detallecompra-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'detalleCompraID',
		'Cantidad',
		'PrecioCompra',
		'compraID',
		'medicamentoID',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
