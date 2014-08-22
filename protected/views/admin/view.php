<?php
/* @var $this AdminController */
/* @var $model admin */

$this->breadcrumbs=array(
	'Admins'=>array('index'),
	$model->idadmin,
);

$this->menu=array(
	array('label'=>'List admin', 'url'=>array('index')),
	array('label'=>'Create admin', 'url'=>array('create')),
	array('label'=>'Update admin', 'url'=>array('update', 'id'=>$model->idadmin)),
	array('label'=>'Delete admin', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idadmin),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage admin', 'url'=>array('admin')),
);
?>

<h1>View admin #<?php echo $model->idadmin; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idadmin',
		'user',
		'senha',
		'dataCriacao',
		'dataEdicao',
		'User_idUser',
	),
)); ?>
