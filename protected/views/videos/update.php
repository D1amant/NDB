<?php
/* @var $this VideosController */
/* @var $model Videos */

$this->breadcrumbs=array(
	'Videoses'=>array('index'),
	$model->idvideos=>array('view','id'=>$model->idvideos),
	'Update',
);

$this->menu=array(
	array('label'=>'List Videos', 'url'=>array('index')),
	array('label'=>'Create Videos', 'url'=>array('create')),
	array('label'=>'View Videos', 'url'=>array('view', 'id'=>$model->idvideos)),
	array('label'=>'Manage Videos', 'url'=>array('admin')),
);
?>

<h1>Update Videos <?php echo $model->idvideos; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>