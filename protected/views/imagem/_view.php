<?php
/* @var $this ImagemController */
/* @var $data Imagem */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idimagem')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idimagem), array('view', 'id'=>$data->idimagem)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('camino')); ?>:</b>
	<?php echo CHtml::encode($data->camino); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tutulo')); ?>:</b>
	<?php echo CHtml::encode($data->tutulo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('descricao')); ?>:</b>
	<?php echo CHtml::encode($data->descricao); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('galeria_idgaleria')); ?>:</b>
	<?php echo CHtml::encode($data->galeria_idgaleria); ?>
	<br />


</div>