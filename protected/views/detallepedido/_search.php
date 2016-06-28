<?php
/* @var $this DetallepedidoController */
/* @var $model Detallepedido */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'detallePedidoID'); ?>
		<?php echo $form->textField($model,'detallePedidoID'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Cantidad'); ?>
		<?php echo $form->textField($model,'Cantidad'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'PrecioUnitario'); ?>
		<?php echo $form->textField($model,'PrecioUnitario'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ventaID'); ?>
		<?php echo $form->textField($model,'ventaID'); ?>
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