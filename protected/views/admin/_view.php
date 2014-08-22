<?php
/* @var $this AdminController */
/* @var $data admin */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idadmin')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idadmin), array('view', 'id'=>$data->idadmin)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('user')); ?>:</b>
	<?php echo CHtml::encode($data->user); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('senha')); ?>:</b>
	<?php echo CHtml::encode($data->senha); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dataCriacao')); ?>:</b>
	<?php echo CHtml::encode($data->dataCriacao); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dataEdicao')); ?>:</b>
	<?php echo CHtml::encode($data->dataEdicao); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('User_idUser')); ?>:</b>
	<?php echo CHtml::encode($data->User_idUser); ?>
	<br />


</div>