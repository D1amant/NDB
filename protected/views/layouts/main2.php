
<?php echo Yii::app()->bootstrap->init();?>
<?php /* @var $this Controller */ ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />

	<!-- blueprint CSS framework -->
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/screen.css" media="screen, projection" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/print.css" media="print" />
	<!--[if lt IE 8]>
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ie.css" media="screen, projection" />
	<![endif]-->
	
	  <!-- Demo CSS -->
	
	<link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/css/flexslider.css" type="text/css" media="screen" />

    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/up.css" type="text/css"  media="screen" />
			<!-- Modernizr -->
  <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/modernizr.js"></script>
		
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css" />

	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body>



	<!-- <div id="header">
		<div id="logo"><?php echo CHtml::encode(Yii::app()->name); ?></div>
	</div><!-- header -->

	<div id="mainmenu">
		<center>
		<?php $this->widget('zii.widgets.CMenu',array(
			'items'=>array(
				array('label'=>'NDB', 'url'=>array('/site/index')),
				array('label'=>'FOTOS', 'url'=>array('/galeria/index')),
				array('label'=>'AGENDA', 'url'=>array('/agenda/index')),
				array('label'=>'INTEGRANTES', 'url'=>array('/Integrante/index')),

				array('label'=>'VÍDEOS', 'url'=>array('/videos/index')),
				array('label'=>'CONTATOS', 'url'=>array('/site/contact')),
				// array('label'=>'LOGIN', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
				// array('label'=>'LOGOUT ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
			),
		)); ?>
		</center>
	</div><!-- mainmenu -->
	
	<!-- <?php echo CHtml::image('http://localhost/Dropbox/projetos/web/NDB/protected/images/grupoNdb.jpg', 'Site',
								array('wight' => "100%" , 'height' => "100%" )); ?> ?> -->
	<br/><br/>					
	 <!-- <img src="http://localhost/Dropbox/projetos/web/NDB/protected/images/grupoNdb.jpg" width="100%" height="690" />  -->
	
	<div class="container" id="page">
	<?php if(isset($this->breadcrumbs)):?>
		<?php $this->widget('zii.widgets.CBreadcrumbs', array(
			'links'=>$this->breadcrumbs,
		)); ?><!-- breadcrumbs -->
	<?php endif?>

	<?php echo $content; ?>

	<div class="clear"></div>

	<div id="footer">
		 Copyright &copy; <?php echo date('Y'); ?> by My Company.<br/>
		All Rights Reserved.<br/>
		<a rel=""><?php echo "MegaaPixel"; ?> </a>
	</div>
	
	<!-- footer -->








<!-- jQuery -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
  <script>window.jQuery || document.write('<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery-1.7.min.js">\x3C/script>')</script>

  <!-- FlexSlider -->
  <script defer src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery.flexslider.js"></script>

  <script type="text/javascript">

 
    $(function(){
      SyntaxHighlighter.all();
    });
    $(window).load(function(){
      $('.flexslider').flexslider({
          animation: "slide",
          useCSS: false,
          itemWidth: 700,
          itemMargin: 5,
         
          animationLoop: false,
          smoothHeight: true,
      
        start: function(slider){
          $('body').removeClass('loading');
        }
      });
    });
    
  </script>

   <!-- Syntax Highlighter -->
	<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/shCore.js"></script>
	<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/shBrushXml.js"></script>
	<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/shBrushJScript.js"></script>

</body>
</html>
