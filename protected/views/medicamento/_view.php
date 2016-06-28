<?php
/* @var $this MedicamentoController */
/* @var $data Medicamento */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('medicamentoID')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->medicamentoID), array('view', 'id'=>$data->medicamentoID)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Nombre')); ?>:</b>
	<?php echo CHtml::encode($data->Nombre); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Descripcion')); ?>:</b>
	<?php echo CHtml::encode($data->Descripcion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Cantidad')); ?>:</b>
	<?php echo CHtml::encode($data->Cantidad); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Precio')); ?>:</b>
	<?php echo CHtml::encode($data->Precio); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Stock')); ?>:</b>
	<?php echo CHtml::encode($data->Stock); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('StrockMinimo')); ?>:</b>
	<?php echo CHtml::encode($data->StrockMinimo); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('StockMaximo')); ?>:</b>
	<?php echo CHtml::encode($data->StockMaximo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Bajoreceta')); ?>:</b>
	<?php echo CHtml::encode($data->Bajoreceta); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('FechaVencimiento')); ?>:</b>
	<?php echo CHtml::encode($data->FechaVencimiento); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('UnidadMedida')); ?>:</b>
	<?php echo CHtml::encode($data->UnidadMedida); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('categoriaID')); ?>:</b>
	<?php echo CHtml::encode($data->categoriaID); ?>
	<br />

	*/ ?>

</div>