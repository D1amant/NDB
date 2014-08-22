<?php
/* @var $this GaleriaController */
/* @var $data Galeria */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idgaleria')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idgaleria), array('view', 'id'=>$data->idgaleria)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('titulo')); ?>:</b>
	<?php echo CHtml::encode($data->titulo); ?>
	<br />

	<!-- <b><?php echo CHtml::encode($data->getAttributeLabel('descricao')); ?>:</b>
	<?php echo CHtml::encode($data->descricao); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dataCriacao')); ?>:</b>
	<?php echo CHtml::encode($data->dataCriacao); ?>
	<br /> -->
	<b><?php echo CHtml::encode($data->getAttributeLabel('imagem')); ?>:</b>
	<?php echo CHtml::encode($data->imagem); ?>
	<br />
		<b><?php echo CHtml::encode($data->getAttributeLabel('diretrio')); ?>:</b>
	<?php echo CHtml::encode($data->diretoio); ?>
	<br />

</div>