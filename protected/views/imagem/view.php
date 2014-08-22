<?php
/* @var $this ImagemController */
/* @var $model Imagem */

$this->breadcrumbs=array(
	'Imagems'=>array('index'),
	$model->idimagem,
);

$this->menu=array(
	array('label'=>'List Imagem', 'url'=>array('index')),
	array('label'=>'Create Imagem', 'url'=>array('create')),
	array('label'=>'Update Imagem', 'url'=>array('update', 'id'=>$model->idimagem)),
	array('label'=>'Delete Imagem', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idimagem),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Imagem', 'url'=>array('admin')),
);
?>

<h1>View Imagem #<?php echo $model->idimagem; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idimagem',
		'camino',
		'tutulo',
		'descricao',
		'galeria_idgaleria',
	),
)); ?>
