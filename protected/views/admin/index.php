<?php
/* @var $this AdminController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Admins',
);

$this->menu=array(
	array('label'=>'Create admin', 'url'=>array('create')),
	array('label'=>'Manage admin', 'url'=>array('admin')),
);
?>

<h1>Admins</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); 






?>