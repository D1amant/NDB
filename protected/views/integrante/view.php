<?php
/* @var $this IntegranteController */
/* @var $model Integrante */



$this->breadcrumbs=array(
	'Integrantes'=>array('index'),
	$model->idintegrante,
);

$this->menu=array(
	array('label'=>'List Integrante', 'url'=>array('index')),
	array('label'=>'Create Integrante', 'url'=>array('create')),
	array('label'=>'Update Integrante', 'url'=>array('update', 'id'=>$model->idintegrante)),
	array('label'=>'Delete Integrante', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idintegrante),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Integrante', 'url'=>array('admin')),
);
?>

<h1>View Integrante #<?php echo $model->idintegrante; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idintegrante',
		'idade',
		'funcao',
		'facebook',
		'twitter',
		'imagem',
		'dataCriacao',
		'dataEdicao',
		'User_idUser',
	),
)); ?>
