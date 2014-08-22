<?php
/* @var $this IntegranteController */
/* @var $model Integrante */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'integrante-form',
	'htmlOptions'=>array('enctype' => 'multipart/form-data'),
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'idade'); ?>
		<?php echo $form->textField($model,'idade'); ?>
		<?php echo $form->error($model,'idade'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'funcao'); ?>
		<?php echo $form->textField($model,'funcao',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'funcao'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'facebook'); ?>
		<?php echo $form->textField($model,'facebook',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'facebook'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'twitter'); ?>
		<?php echo $form->textField($model,'twitter',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'twitter'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'imagem'); ?>
		<?php echo $form->fileField($model,'imagem'); ?>
		<?php echo $form->error($model,'imagem'); ?>
	</div>

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

	<div class="row">
		<?php echo $form->labelEx($model,'User_idUser'); ?>
		<?php echo $form->textField($model,'User_idUser',array('value' => $model->User_idUser, 'readonly' => true )); ?>
		<?php echo $form->error($model,'User_idUser'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->