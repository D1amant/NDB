<?php
/* @var $this GaleriaController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Galerias',
);

$this->menu=array(
	array('label'=>'Create Galeria', 'url'=>array('create')),
	array('label'=>'Manage Galeria', 'url'=>array('admin')),
);
?>

<h1>Samba e prazer tem tudo a vê !!!</h1>

<?php
 // $this->widget('zii.widgets.CListView', array(
	// 'dataProvider'=>$dataProvider,
	// 'itemView'=>'_view',
// ));


 ?>
<?php 

foreach ($model as $value) { ?>
	
	<h3><?php echo $value['titulo']; ?></h3>
<div class="view">
	<div id="main" role="main">
      <section class="slider">
        <div class="flexslider">
          <ul class="slides">
		     <?php 
          			$data = explode(";", $value['imagem']);
          	 	
                   for ($i = 0; $i < count($data) - 3; $i++){ ?>
  	    		<li>
  	    	    	<img   src="<?php  echo 'http://localhost/NDB/inc/img.php?nomeImagem='.$data[$i].'&diretorio='.$value['diretorio']; ?>"  />
  	    		</li>
  	     <?php } ?>	
          </ul>
        </div>
      </section>
    </div> 
</div>
<?php } ?>



