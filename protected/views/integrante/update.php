<?php
/* @var $this IntegranteController */
/* @var $model Integrante */

$this->breadcrumbs=array(
	'Integrantes'=>array('index'),
	$model->idintegrante=>array('view','id'=>$model->idintegrante),
	'Update',
);

$this->menu=array(
	array('label'=>'List Integrante', 'url'=>array('index')),
	array('label'=>'Create Integrante', 'url'=>array('create')),
	array('label'=>'View Integrante', 'url'=>array('view', 'id'=>$model->idintegrante)),
	array('label'=>'Manage Integrante', 'url'=>array('admin')),
);
?>

<h1>Update Integrante <?php echo $model->idintegrante; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>