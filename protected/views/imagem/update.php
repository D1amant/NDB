<?php
/* @var $this ImagemController */
/* @var $model Imagem */

$this->breadcrumbs=array(
	'Imagems'=>array('index'),
	$model->idimagem=>array('view','id'=>$model->idimagem),
	'Update',
);

$this->menu=array(
	array('label'=>'List Imagem', 'url'=>array('index')),
	array('label'=>'Create Imagem', 'url'=>array('create')),
	array('label'=>'View Imagem', 'url'=>array('view', 'id'=>$model->idimagem)),
	array('label'=>'Manage Imagem', 'url'=>array('admin')),
);
?>

<h1>Update Imagem <?php echo $model->idimagem; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>