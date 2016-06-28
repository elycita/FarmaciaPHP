<?php
/* @var $this CompraController */
/* @var $data Compra */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('compraID')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->compraID), array('view', 'id'=>$data->compraID)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('usuarioID')); ?>:</b>
	<?php echo CHtml::encode($data->usuarioID); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('proveedorID')); ?>:</b>
	<?php echo CHtml::encode($data->proveedorID); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('FechaCompra')); ?>:</b>
	<?php echo CHtml::encode($data->FechaCompra); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('MontoTotal')); ?>:</b>
	<?php echo CHtml::encode($data->MontoTotal); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Descuento')); ?>:</b>
	<?php echo CHtml::encode($data->Descuento); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Observacion')); ?>:</b>
	<?php echo CHtml::encode($data->Observacion); ?>
	<br />


</div>