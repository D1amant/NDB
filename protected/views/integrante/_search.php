<?php
/* @var $this IntegranteController */
/* @var $model Integrante */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'idintegrante'); ?>
		<?php echo $form->textField($model,'idintegrante'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'idade'); ?>
		<?php echo $form->textField($model,'idade'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'funcao'); ?>
		<?php echo $form->textField($model,'funcao',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'facebook'); ?>
		<?php echo $form->textField($model,'facebook',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'twitter'); ?>
		<?php echo $form->textField($model,'twitter',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'imagem'); ?>
		<?php echo $form->textField($model,'imagem',array('size'=>45,'maxlength'=>45)); ?>
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