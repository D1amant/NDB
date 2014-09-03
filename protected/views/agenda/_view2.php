<?php
/* @var $this AgendaController */
/* @var $data Agenda */
?>

   <div class="col-sm-4 col-xs-6">

      <div class="panel panel-default">
          <div>  </div>
          <div class="panel-body">
            <p class="lead"><b><?php echo CHtml::encode($data->getAttributeLabel('data')); ?>:</b>
									<?php echo CHtml::encode($data->data); ?></p>
            <p><?php echo CHtml::encode($data->getAttributeLabel('local')); ?>:</b>
	<?php echo CHtml::encode($data->local); ?></p>
            
            <p>
              <?php echo CHtml::encode($data->getAttributeLabel('observaca')); ?>:</b>
	       <?php echo CHtml::encode($data->observaca); ?>
            </p>
          </div>
        </div><!--/panel-->
      </div>


