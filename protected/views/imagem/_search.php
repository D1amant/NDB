<?php
/* @var $this ImagemController */
/* @var $model Imagem */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'idimagem'); ?>
		<?php echo $form->textField($model,'idimagem'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'camino'); ?>
		<?php echo $form->textField($model,'camino',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tutulo'); ?>
		<?php echo $form->textField($model,'tutulo',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'descricao'); ?>
		<?php echo $form->textField($model,'descricao',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'galeria_idgaleria'); ?>
		<?php echo $form->textField($model,'galeria_idgaleria'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->