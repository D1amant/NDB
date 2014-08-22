<?php
/* @var $this AdminController */
/* @var $model admin */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
));




 ?>

	<div class="row">
		<?php echo $form->label($model,'idadmin'); ?>
		<?php echo $form->textField($model,'idadmin'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'user'); ?>
		<?php echo $form->textField($model,'user',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'senha'); ?>
		<?php echo $form->textField($model,'senha',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'dataCriacao'); ?>
		<?php echo $form->textField($model,'dataCriacao'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'dataEdicao'); ?>
		<?php echo $form->textField($model,'dataEdicao'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'User_idUser'); ?>
		<?php echo $form->textField($model,'User_idUser'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->