<?php
/* @var $this ImagemController */
/* @var $model Imagem */

$this->breadcrumbs=array(
	'Imagems'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Imagem', 'url'=>array('index')),
	array('label'=>'Manage Imagem', 'url'=>array('admin')),
);

?>

<h1>Create Imagem</h1>

<?php $this->renderPartial('_form', array('model'=>$model,'model2'=>$model2,)); ?>