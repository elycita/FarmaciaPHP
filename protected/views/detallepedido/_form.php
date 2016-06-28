<?php
/* @var $this DetallepedidoController */
/* @var $model Detallepedido */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'detallepedido-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'detallePedidoID'); ?>
		<?php echo $form->textField($model,'detallePedidoID'); ?>
		<?php echo $form->error($model,'detallePedidoID'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Cantidad'); ?>
		<?php echo $form->textField($model,'Cantidad'); ?>
		<?php echo $form->error($model,'Cantidad'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'PrecioUnitario'); ?>
		<?php echo $form->textField($model,'PrecioUnitario'); ?>
		<?php echo $form->error($model,'PrecioUnitario'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ventaID'); ?>
		<?php echo $form->textField($model,'ventaID'); ?>
		<?php echo $form->error($model,'ventaID'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'medicamentoID'); ?>
		<?php echo $form->textField($model,'medicamentoID'); ?>
		<?php echo $form->error($model,'medicamentoID'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->