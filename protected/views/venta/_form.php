<?php
/* @var $this VentaController */
/* @var $model Venta */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'venta-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'ventaID'); ?>
		<?php echo $form->textField($model,'ventaID'); ?>
		<?php echo $form->error($model,'ventaID'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Fecha'); ?>
		<?php echo $form->textField($model,'Fecha'); ?>
		<?php echo $form->error($model,'Fecha'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'clienteID'); ?>
		<?php echo $form->dropDownList($model,'clienteID',
                  CHtml :: listData (Cliente::model()->findAll(),'clienteID','Nombre')
                        ); ?>
		<?php echo $form->error($model,'clienteID'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'usuarioID'); ?>
		<?php echo $form->dropDownList($model,'usuarioID',
                     CHtml :: listData (Usuario::model()->findAll(),'usuario','Nombre')  
                        ); ?>
		<?php echo $form->error($model,'usuarioID'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->