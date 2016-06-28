<?php
/* @var $this UsuarioController */
/* @var $data Usuario */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('usuarioID')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->usuarioID), array('view', 'id'=>$data->usuarioID)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Nombre')); ?>:</b>
	<?php echo CHtml::encode($data->Nombre); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Telefono')); ?>:</b>
	<?php echo CHtml::encode($data->Telefono); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Cargo')); ?>:</b>
	<?php echo CHtml::encode($data->Cargo); ?>
	<br />


</div>