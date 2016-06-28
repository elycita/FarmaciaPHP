<?php
/* @var $this CompraController */
/* @var $model Compra */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'compraID'); ?>
		<?php echo $form->textField($model,'compraID'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'usuarioID'); ?>
		<?php echo $form->textField($model,'usuarioID'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'proveedorID'); ?>
		<?php echo $form->textField($model,'proveedorID'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'FechaCompra'); ?>
		<?php echo $form->textField($model,'FechaCompra'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'MontoTotal'); ?>
		<?php echo $form->textField($model,'MontoTotal'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Descuento'); ?>
		<?php echo $form->textField($model,'Descuento'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Observacion'); ?>
		<?php echo $form->textField($model,'Observacion',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->