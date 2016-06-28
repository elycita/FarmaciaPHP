<?php
/* @var $this DetallecompraController */
/* @var $data Detallecompra */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('detalleCompraID')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->detalleCompraID), array('view', 'id'=>$data->detalleCompraID)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Cantidad')); ?>:</b>
	<?php echo CHtml::encode($data->Cantidad); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('PrecioCompra')); ?>:</b>
	<?php echo CHtml::encode($data->PrecioCompra); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('compraID')); ?>:</b>
	<?php echo CHtml::encode($data->compraID); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('medicamentoID')); ?>:</b>
	<?php echo CHtml::encode($data->medicamentoID); ?>
	<br />


</div>