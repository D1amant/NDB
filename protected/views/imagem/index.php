<?php
/* @var $this ImagemController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Imagems',
);

$this->menu=array(
	array('label'=>'Create Imagem', 'url'=>array('create')),
	array('label'=>'Manage Imagem', 'url'=>array('admin')),
);
?>

<h1>Imagems</h1>

<?php 

$form = $this->beginWidget('CActiveForm', array(
	'id'=>'imagem-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
	
	'htmlOptions' => array('enctype' => 'multipart/form-data'),
	
));




echo Yii::app() -> getBasePath() ;
$this->widget('xupload.XUpload', array(
                    'url' => Yii::app()->createUrl("/images/upload"),
                    'model' => $model,
                    'attribute' => 'file',
                    'multiple' => true,
                    'htmlOptions' => array('id'=>'imagem-form'),
               
));


// 
// $this->widget('zii.widgets.CListView', array(
	// 'dataProvider'=>$dataProvider,
	// 'itemView'=>'_view',
// ));



 ?>
<?php $this->endWidget(); ?>