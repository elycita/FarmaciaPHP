<?php
/* @var $this MedicamentoController */
/* @var $model Medicamento */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'medicamento-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'medicamentoID'); ?>
		<?php echo $form->textField($model,'medicamentoID'); ?>
		<?php echo $form->error($model,'medicamentoID'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Nombre'); ?>
		<?php echo $form->textField($model,'Nombre',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'Nombre'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Descripcion'); ?>
		<?php echo $form->textField($model,'Descripcion',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'Descripcion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Cantidad'); ?>
		<?php echo $form->textField($model,'Cantidad'); ?>
		<?php echo $form->error($model,'Cantidad'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Precio'); ?>
		<?php echo $form->textField($model,'Precio'); ?>
		<?php echo $form->error($model,'Precio'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Stock'); ?>
		<?php echo $form->textField($model,'Stock'); ?>
		<?php echo $form->error($model,'Stock'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'StrockMinimo'); ?>
		<?php echo $form->textField($model,'StrockMinimo'); ?>
		<?php echo $form->error($model,'StrockMinimo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'StockMaximo'); ?>
		<?php echo $form->textField($model,'StockMaximo'); ?>
		<?php echo $form->error($model,'StockMaximo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Bajoreceta'); ?>
		<?php echo $form->textField($model,'Bajoreceta',array('size'=>5,'maxlength'=>5)); ?>
		<?php echo $form->error($model,'Bajoreceta'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'FechaVencimiento'); ?>
		<?php echo $form->textField($model,'FechaVencimiento'); ?>
		<?php echo $form->error($model,'FechaVencimiento'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'UnidadMedida'); ?>
		<?php echo $form->textField($model,'UnidadMedida',array('size'=>15,'maxlength'=>15)); ?>
		<?php echo $form->error($model,'UnidadMedida'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'categoriaID'); ?>
		<?php echo $form->textField($model,'categoriaID'); ?>
		<?php echo $form->error($model,'categoriaID'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->