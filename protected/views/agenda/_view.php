<?php
/* @var $this AgendaController */
/* @var $data Agenda */
?>

<div class="view2">

	<!-- <b><?php echo CHtml::encode($data->getAttributeLabel('idagenda')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idagenda), array('view', 'id'=>$data->idagenda)); ?>
	<br /> -->

	<b><?php echo CHtml::encode($data->getAttributeLabel('data')); ?>:</b>
	<?php echo CHtml::encode($data->data); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('hora')); ?>:</b>
	<?php echo CHtml::encode($data->hora); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('local')); ?>:</b>
	<?php echo CHtml::encode($data->local); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('observaca')); ?>:</b>
	<?php echo CHtml::encode($data->observaca); ?>
	<br />

	<!-- <b><?php echo CHtml::encode($data->getAttributeLabel('imagem')); ?>:</b>
	<?php echo CHtml::encode($data->imagem); ?>
	<br /> -->

	<!-- <b><?php echo CHtml::encode($data->getAttributeLabel('dataCriacao')); ?>:</b>
	<?php echo CHtml::encode($data->dataCriacao); ?>
	<br /> -->

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('dataEdicao')); ?>:</b>
	<?php echo CHtml::encode($data->dataEdicao); ?>
	<br />

	*/ ?>

</div>