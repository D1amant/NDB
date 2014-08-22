<?php
/* @var $this VideosController */
/* @var $data Videos */
?>

<div class="view">

	<!-- <b><?php echo CHtml::encode($data->getAttributeLabel('titulo')); ?>:</b> -->
	<h2><?php echo CHtml::encode($data->titulo); ?></h2>
	<br />
	<iframe width="560" height="315" src="<?php echo CHtml::encode($data->url); ?>" frameborder="0" allowfullscreen></iframe>
   <!-- <b><?php echo CHtml::encode($data->getAttributeLabel('url')); ?>:</b> -->
	 <!-- <?php echo CHtml::encode($data->url); ?> -->
	<br />
	
	<!-- <b><?php echo CHtml::encode($data->getAttributeLabel('idvideos')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idvideos), array('view', 'id'=>$data->idvideos)); ?>
	<br /> -->



	

	<b><?php echo CHtml::encode($data->getAttributeLabel('descrico')); ?>:</b>
	<?php echo CHtml::encode($data->descrico); ?>
	<br />

</div><!-- page -->

</div>
