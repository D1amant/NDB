<?php
/* @var $this AgendaController */
/* @var $model Agenda */

$this->breadcrumbs=array(
	'Agendas'=>array('index'),
	$model->idagenda,
);

$this->menu=array(
	array('label'=>'List Agenda', 'url'=>array('index')),
	array('label'=>'Create Agenda', 'url'=>array('create')),
	array('label'=>'Update Agenda', 'url'=>array('update', 'id'=>$model->idagenda)),
	array('label'=>'Delete Agenda', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idagenda),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Agenda', 'url'=>array('admin')),
);
?>

<h1>View Agenda #<?php echo $model->idagenda; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idagenda',
		'data',
		'hora',
		'local',
		'observaca',
	
	),
)); ?>
