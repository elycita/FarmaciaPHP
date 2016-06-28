<?php
/* @var $this DetallepedidoController */
/* @var $data Detallepedido */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('detallePedidoID')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->detallePedidoID), array('view', 'id'=>$data->detallePedidoID)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Cantidad')); ?>:</b>
	<?php echo CHtml::encode($data->Cantidad); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('PrecioUnitario')); ?>:</b>
	<?php echo CHtml::encode($data->PrecioUnitario); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ventaID')); ?>:</b>
	<?php echo CHtml::encode($data->ventaID); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('medicamentoID')); ?>:</b>
	<?php echo CHtml::encode($data->medicamentoID); ?>
	<br />


</div>