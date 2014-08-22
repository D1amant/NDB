<?php
/* @var $this IntegranteController */
/* @var $dataProvider CActiveDataProvider */
$this->pageTitle=Yii::app()->name = "Grupo Nós do bem::Integrantes";
$this->breadcrumbs=array(
	'Integrantes',
);

$this->menu=array(
	array('label'=>'Create Integrante', 'url'=>array('user/create')),
	array('label'=>'Manage Integrante', 'url'=>array('admin')),
);
?>

<h1>#fazOBem</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
