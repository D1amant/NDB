<?php
/* @var $this IntegranteController */
/* @var $data Integrante */


$data2 =  User::model()->findByAttributes(array ( 'idUser' => CHtml::encode($data->User_idUser)));
?>

<div class="view">
	
   <!-- <b><?php echo CHtml::encode($data2->getAttributeLabel('nome')); ?>:</b> -->
	<h3><?php echo CHtml::encode($data2->nome); ?></h3>
	<br />
	<!-- <b><?php echo CHtml::encode($data->getAttributeLabel('imagem')); ?>:</b> -->
	<?php echo CHtml::image('http://localhost/Dropbox/projetos/web/NDB/protected/'.$data->imagem , 'Integrante',
								array('wight' => 200 , 'height' => 400)); ?>
	<br />
	
 

	<!-- <b><?php echo CHtml::encode($data->getAttributeLabel('idintegrante')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idintegrante), array('view', 'id'=>$data->idintegrante)); ?>
	<br /> -->
	<b><?php echo CHtml::encode($data->getAttributeLabel('idade')); ?>:</b>
	<?php echo CHtml::encode($data->idade); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('funcao')); ?>:</b>
	<?php echo CHtml::encode($data->funcao); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('facebook')); ?>:</b>
	<?php echo CHtml::encode($data->facebook); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('twitter')); ?>:</b>
	<?php echo CHtml::encode($data->twitter); ?>
	<br />



	<!-- <b><?php echo CHtml::encode($data->getAttributeLabel('dataCriacao')); ?>:</b>
	<?php echo CHtml::encode($data->dataCriacao); ?>
	<br /> -->

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('dataEdicao')); ?>:</b>
	<?php echo CHtml::encode($data->dataEdicao); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('User_idUser')); ?>:</b>
	<?php echo CHtml::encode($data->User_idUser); ?>
	<br />

	*/?>

</div>
<!-- <img src="http://localhost/Dropbox/projetos/web/NDB/protected/images/upload/images.jpg" alt=""> -->