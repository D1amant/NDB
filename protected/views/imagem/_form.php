<?php
/* @var $this ImagemController */
/* @var $model Imagem */
/* @var $form CActiveForm */
?>

<div class="form">





<?php 


	

	$this->widget('xupload.XUpload', array(
			'url' => Yii::app()->createUrl("../../images/upload", array("parent_id" => 1)),
			'model' => $model2,
			'attribute' => 'file',
			'multiple' => true,
		));
		
$form = $this->beginWidget('CActiveForm', array(
	'id'=>'imagem-form',
	'htmlOptions'=>array('enctype' => 'multipart/form-data'),
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
	
));




 ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<!-- <div class="row">
		<?php echo $form->labelEx($model,'idimagem'); ?>
		<?php echo $form->textField($model,'idimagem'); ?>
		<?php echo $form->error($model,'idimagem'); ?>
	</div> -

	<!-- <div class="row">
		<?php echo $form->labelEx($model,'camino'); ?>
		<?php echo $form->fileField($model,'camino' ,array( 'type'=>'multiple')); ?>
		<?php echo $form->error($model,'camino'); ?>
	</div> -->

	<div class="row">
		<?php echo $form->labelEx($model,'tutulo'); ?>
		<?php echo $form->textField($model,'tutulo',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'tutulo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'descricao'); ?>
		<?php echo $form->textField($model,'descricao',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'descricao'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'galeria_idgaleria'); ?>
		<?php echo $form->textField($model,'galeria_idgaleria'); ?>
		<?php echo $form->error($model,'galeria_idgaleria'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->