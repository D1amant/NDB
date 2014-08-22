<?php
/* @var $this AdminController */
/* @var $model admin */

$this->breadcrumbs=array(
	'Admins'=>array('index'),
	$model->idadmin=>array('view','id'=>$model->idadmin),
	'Update',
);

$this->menu=array(
	array('label'=>'List admin', 'url'=>array('index')),
	array('label'=>'Create admin', 'url'=>array('create')),
	array('label'=>'View admin', 'url'=>array('view', 'id'=>$model->idadmin)),
	array('label'=>'Manage admin', 'url'=>array('admin')),
);
?>

<h1>Update admin <?php echo $model->idadmin; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>