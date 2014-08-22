<?php
/* @var $this IntegranteController */
/* @var $model Integrante */

$this->breadcrumbs=array(
	'Integrantes'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Integrante', 'url'=>array('index')),
	array('label'=>'Manage Integrante', 'url'=>array('admin')),
);

 if (isset($_GET['User_idUser'])) $model->User_idUser = $_GET['User_idUser'];

?>

<h1>Create Integrante</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>