<?php
/* @var $this DetallecompraController */
/* @var $model Detallecompra */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'detallecompra-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'detalleCompraID'); ?>
		<?php echo $form->textField($model,'detalleCompraID'); ?>
		<?php echo $form->error($model,'detalleCompraID'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Cantidad'); ?>
		<?php echo $form->textField($model,'Cantidad'); ?>
		<?php echo $form->error($model,'Cantidad'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'PrecioCompra'); ?>
		<?php echo $form->textField($model,'PrecioCompra'); ?>
		<?php echo $form->error($model,'PrecioCompra'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'compraID'); ?>
		<?php echo $form->dropDownList($model,'compraID',
                        CHtml :: listData (Compra::model()->findAll(),'CompraID','CompraID')
                        ); ?>
		<?php echo $form->error($model,'compraID'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'medicamentoID'); ?>
		<?php echo $form->dropDownList($model, 'medicamentoID' ,
                        CHtml :: listData (Medicamento::model()->findAll(),'MedicamentoID','Nombre')
                        ); ?>
		<?php echo $form->error($model,'medicamentoID'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->