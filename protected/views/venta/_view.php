<?php
/* @var $this VentaController */
/* @var $data Venta */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('ventaID')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->ventaID), array('view', 'id'=>$data->ventaID)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Fecha')); ?>:</b>
	<?php echo CHtml::encode($data->Fecha); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('clienteID')); ?>:</b>
	<?php echo CHtml::encode($data->clienteID); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('usuarioID')); ?>:</b>
	<?php echo CHtml::encode($data->usuarioID); ?>
	<br />


</div>