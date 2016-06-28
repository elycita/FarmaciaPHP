<?php
/* @var $this CompraController */
/* @var $model Compra */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'compra-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'compraID'); ?>
		<?php echo $form->textField($model,'compraID'); ?>
		<?php echo $form->error($model,'compraID'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'usuarioID'); ?>
		<?php echo $form->textField($model,'usuarioID'); ?>
		<?php echo $form->error($model,'usuarioID'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'proveedorID'); ?>
		<?php echo $form->textField($model,'proveedorID'); ?>
		<?php echo $form->error($model,'proveedorID'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'FechaCompra'); ?>
		<?php echo $form->textField($model,'FechaCompra'); ?>
		<?php echo $form->error($model,'FechaCompra'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'MontoTotal'); ?>
		<?php echo $form->textField($model,'MontoTotal'); ?>
		<?php echo $form->error($model,'MontoTotal'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Descuento'); ?>
		<?php echo $form->textField($model,'Descuento'); ?>
		<?php echo $form->error($model,'Descuento'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Observacion'); ?>
		<?php echo $form->textField($model,'Observacion',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'Observacion'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->