<?php
/* @var $this VideosController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Videoses',
);

$this->pageTitle=Yii::app()->name = "Grupo Nós do bem::Vídeos";


$this->menu=array(
	array('label'=>'Create Videos', 'url'=>array('create')),
	array('label'=>'Manage Videos', 'url'=>array('admin')),
);
?>


<?php 
// $this->widget('zii.widgets.CListView', array(
	// 'dataProvider'=>$dataProvider,
	// 'itemView'=>'_view',
//)); ?> 

<div class="view">
	 <div id="main" role="main">
      <section class="slider">
        <div class="flexslider">
          <ul class="slides">
   
          <?php for ($i = 0; $i < count($data); $i++){ ?>
  	    		<li>
  	    	    	<iframe width="680" height="415" src="<?php  echo $data[$i]->url; ?>" frameborder="0" allowfullscreen></iframe>
  	    		</li>
  	     <?php } ?>	
          </ul>
        </div>
      </section>
    </div> 

</div>

 
