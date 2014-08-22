<?php
/* @var $this UserController */
/* @var $model User */
/* @var $form CActiveForm */
?>

<div class="form">

	<?php $form = $this -> beginWidget('CActiveForm', array('id' => 'user-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation' => false, ));
	?>

	<p class="note">
		Fields with <span class="required">*</span> are required.
	</p>

	<?php echo $form -> errorSummary($model); ?>

	<div class="row">
		<?php echo $form -> labelEx($model, 'nome'); ?>
		<?php echo $form -> textField($model, 'nome', array('size' => 45, 'maxlength' => 45)); ?>
		<?php echo $form -> error($model, 'nome'); ?>
	</div>

	<div class="row">
		<?php echo $form -> labelEx($model, 'telefone'); ?>
		<?php //echo $form -> textField($model, 'telefone', array('size' => 45, 'maxlength' => 45)); 
				$this -> widget('CMaskedTextField', array('model' => $model, 'attribute' => 'telefone', 
 											'mask' => '(99) 9999-9999', 'htmlOptions' => array('size' => 13)));
		?>
		<?php echo $form -> error($model, 'telefone'); ?>
	</div>

	<div class="row">
		<?php echo $form -> labelEx($model, 'email'); ?>
		<?php echo $form -> textField($model, 'email', array('size' => 45, 'maxlength' => 45)); ?>
		<?php echo $form -> error($model, 'email'); ?>
	</div>

	<!-- <div class="row">
		<?php echo $form -> labelEx($model, 'dataCriacao'); ?>
		<?php echo $form -> textField($model, 'dataCriacao'); ?>
		<?php echo $form -> error($model, 'dataCriacao'); ?>
	</div>

	<div class="row">
		<?php echo $form -> labelEx($model, 'dataEdicao'); ?>
		<?php echo $form -> textField($model, 'dataEdicao'); ?>
		<?php echo $form -> error($model, 'dataEdicao'); ?>
	</div> -->

	<div class="row">
		<?php echo $form -> labelEx($model, 'Integrates'); ?>
		<?php echo $form -> radioButton($model, 'tipo', array('value' => 1, 'uncheckValue' => null)); ?>
	   <?php echo $form -> labelEx($model, 'Administrador'); ?>
		<?php echo $form -> radioButton($model, 'tipo', array('value' => 2, 'uncheckValue' => null)); ?>
		
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model -> isNewRecord ? 'Create' : 'Save'); ?>
	</div>

	<?php $this -> endWidget(); ?>
</div><!-- form -->