<?php
/* @var $this DetallecompraController */
/* @var $model Detallecompra */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'detalleCompraID'); ?>
		<?php echo $form->textField($model,'detalleCompraID'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Cantidad'); ?>
		<?php echo $form->textField($model,'Cantidad'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'PrecioCompra'); ?>
		<?php echo $form->textField($model,'PrecioCompra'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'compraID'); ?>
		<?php echo $form->textField($model,'compraID'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'medicamentoID'); ?>
		<?php echo $form->textField($model,'medicamentoID'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->