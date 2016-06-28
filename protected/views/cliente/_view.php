<?php
/* @var $this ClienteController */
/* @var $data Cliente */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('clienteID')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->clienteID), array('view', 'id'=>$data->clienteID)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Nombre')); ?>:</b>
	<?php echo CHtml::encode($data->Nombre); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('CI_NIT')); ?>:</b>
	<?php echo CHtml::encode($data->CI_NIT); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('CorreoElectronico')); ?>:</b>
	<?php echo CHtml::encode($data->CorreoElectronico); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Telefono')); ?>:</b>
	<?php echo CHtml::encode($data->Telefono); ?>
	<br />


</div>