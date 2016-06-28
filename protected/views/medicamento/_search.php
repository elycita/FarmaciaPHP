<?php
/* @var $this MedicamentoController */
/* @var $model Medicamento */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'medicamentoID'); ?>
		<?php echo $form->textField($model,'medicamentoID'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Nombre'); ?>
		<?php echo $form->textField($model,'Nombre',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Descripcion'); ?>
		<?php echo $form->textField($model,'Descripcion',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Cantidad'); ?>
		<?php echo $form->textField($model,'Cantidad'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Precio'); ?>
		<?php echo $form->textField($model,'Precio'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Stock'); ?>
		<?php echo $form->textField($model,'Stock'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'StrockMinimo'); ?>
		<?php echo $form->textField($model,'StrockMinimo'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'StockMaximo'); ?>
		<?php echo $form->textField($model,'StockMaximo'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Bajoreceta'); ?>
		<?php echo $form->textField($model,'Bajoreceta',array('size'=>5,'maxlength'=>5)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'FechaVencimiento'); ?>
		<?php echo $form->textField($model,'FechaVencimiento'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'UnidadMedida'); ?>
		<?php echo $form->textField($model,'UnidadMedida',array('size'=>15,'maxlength'=>15)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'categoriaID'); ?>
		<?php echo $form->textField($model,'categoriaID'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->