<?php
/* @var $this AdminController */
/* @var $model admin */

$this->breadcrumbs=array(
	'Admins'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List admin', 'url'=>array('index')),
	array('label'=>'Manage admin', 'url'=>array('admin')),
);

 if (isset($_GET['User_idUser'])) $model->User_idUser = $_GET['User_idUser'];  // recebendo valor de id do Usuario 
?>

<h1>Create admin</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>