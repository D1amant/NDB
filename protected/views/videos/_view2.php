<?php
/* @var $this VideosController */
/* @var $data Videos */
?>

   <div class="col-sm-4 col-xs-6">

      <div class="panel panel-default">
          <div>  <iframe width="419" height="250" src="<?php  echo CHtml::encode($data->url);  ?>" frameborder="0" allowfullscreen></iframe> </div>
          <div class="panel-body">
            <p class="lead">
									<?php echo CHtml::encode($data->titulo); ?></p>
            <p>
				<?php echo CHtml::encode($data->descrico); ?></p>
            
            <p>
     
            </p>
          </div>
        </div><!--/panel-->
      </div>

