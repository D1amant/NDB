<?php
/* @var $this AgendaController */
/* @var $model Agenda */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'agenda-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'data'); ?>
		<?php // echo $form->textField($model,'data');
             $this -> widget('CMaskedTextField', array('model' => $model, 'attribute' => 'data', 
 											'mask' => '99/99/9999', 'htmlOptions' => array('size' => 10))); ?>
		<?php echo $form->error($model,'data'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'hora'); ?>
		 <?php //echo $form->textField($model,'hora');
		$this -> widget('CMaskedTextField', array('model' => $model, 'attribute' => 'hora', 
 											'mask' => '99:99', 'htmlOptions' => array('size' => 5)));  ?>
		<?php echo $form->error($model,'hora'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'local'); ?>
		<?php echo $form->textField($model,'local',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'local'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'observaca'); ?>
		<?php echo $form->textArea($model,'observaca' , array( 'rows' => 6, 'cols' => 45)); ?>
		<?php echo $form->error($model,'observaca'); ?>
	</div>

	<!-- <div class="row">
		<?php echo $form->labelEx($model,'imagem'); ?>
		<?php echo $form->textField($model,'imagem',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'imagem'); ?>
	</div> -->

	<!-- <div class="row">
		<?php echo $form->labelEx($model,'dataCriacao'); ?>
		<?php echo $form->textField($model,'dataCriacao'); ?>
		<?php echo $form->error($model,'dataCriacao'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'dataEdicao'); ?>
		<?php echo $form->textField($model,'dataEdicao'); ?>
		<?php echo $form->error($model,'dataEdicao'); ?>
	</div> -->
	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->