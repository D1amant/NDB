
<?php echo Yii::app()->bootstrap->init();?>


<?php /* @var $this Controller */ ?>


<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<meta charset="utf-8">
		<title><?php echo CHtml::encode($this->pageTitle); ?></title>
		<meta name="generator" content="Bootply" />
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<!--[if lt IE 9]>
			<script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
		<link href="css/styles.css" rel="stylesheet">
			<link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/css/flexslider.css" type="text/css" media="screen" />
<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css" />
		
	</head>
	<body>
<!-- Wrap all page content here -->
  <div id="section0"></div>
<div id="wrap">
  
<header class="masthead">
    <div class="container">
    <div class="row">
      <div class="col-sm-6">
        <h1><a href="#" title="Bootstrap Template">GRUPO NÓS DO BEM</a>
          <p class="lead">Meu maior tesouro</p></h1>
      </div>
      <div class="col-sm-6">
        <div class="pull-right  hidden-xs">    
          <!-- <a href="#" class="dropdown-toggle" data-toggle="dropdown"><h3><i class="glyphicon glyphicon-cog"></i></h3></a> -->
       
          <!-- <ul class="dropdown-menu">
              <li><a href="#"><i class="glyphicon glyphicon-chevron-right"></i> Link</a></li>
              <li><a href="#"><i class="glyphicon glyphicon-user"></i> Link</a></li>
              <li><a href="#"><i class="glyphicon glyphicon-lock"></i> Link</a></li>
              <li><a href="#"><i class="glyphicon glyphicon-cog"></i> Link</a></li>
          </ul> -->
        </div>
      </div>
    </div>
    </div>
</header>
  
  <!-- Begin page content -->

<!-- Fixed navbar -->
<div class="navbar navbar-custom navbar-inverse navbar-static-top" id="nav">
    
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
      </div>
      <div class="collapse navbar-collapse">
        <ul class="nav navbar-nav nav-justified">
          <li><a href="#section0"><strong>NDB</strong></a></li>
          <li><a href="#section1"><strong>História</strong></a></li>
          <li><a href="#section3">FOTOS</a></li>
          <li><a href="#section6">AGENDA</a></li>
          <!-- <li class="active"><a href="#">INTEGRANTES</a></li> -->
            <li><a href="#section2">VIDEOS</a></li>
          <li><a href="#section4">LOCALIZAÇÃO</a></li>
          <li><a href="#section5">CONTATOS</a></li>
          <li><a href="/NDB/index.php/site/login">ADMIN</a></li>
       
        </ul>
      </div><!--/.nav-collapse -->
    </div><!--/.container -->
</div><!--/.navbar -->
  <div class="divider" id="section1"></div>

  
<div class="container">
  <div class="col-sm-10 col-sm-offset-1">
    <div class="page-header text-center">
      <h1>Como tudo Começou</h1>
    </div>
    
    <p class="lead text-center">
      Sei que o início
Até pode ser difícil
Mas fazendo um sacrifício
Será bem recompensado !!!
    </p>
    <p class="text-center">
      No começo da década de 90, três irmãos: Flávio Régis, Fernando Macaé e Fábio Beça, animavam as festinhas do subúrbio de Vila Valqueire, no Rio de Janeiro, carregando seus pandeiros e tantãs para todos os lados. A paixão pelo samba era antiga, e no começo tudo era só divertimento. Com a chegada de Mug, que trazia um cavaco e sua voz para botar uma pilha no recém-formado grupo, a coisa cresceu, tomou corpo, e o que era apenas uma brincadeira foi ficando cada vez mais sério.

O grupo começou a se apresentar em festas e eventos variados, abrindo shows para os outros artistas ou participando de rodas de samba, construindo aos poucos o seu público fiel e apaixonado. Como conta Fábio Beça, era só por diversão mesmo, porque todos nós temos o pé no chão, sabemos como é difícil viver de música no Brasil”. A onda, que ia crescendo aos poucos, abaixou em 1999, quando houve um grande refluxo no mercado do samba e do pagode.

Com uma nova formação que incluiu Thiago e André Neguinho, o Bom Gosto retomou à estrada, mas desta vez com uma nova proposta: eles mesmos bancarem os eventos onde iriam tocar. Começamos pelos subúrbios do Rio e pela Barra da Tijuca, relembra Fábio, contando ainda algumas das aventuras que viveram durante esse período: passar a noite pregando cartazes e faixas, às vezes até na porta de eventos de outros grupos. Foi um período importante, avalia, porque fez com que todos os integrantes do grupo estivessem muito ligados em todos os detalhes da produção. “Era tudo gente nossa, do segurança à moça do banheiro”, completa.
    </p>
  </div>
</div>
    


<section class="bg-1">
	
  <div class="col-sm-6 col-sm-offset-3 text-center">
  	
  	
  	<h2 style="padding:20px;background-color:rgba(5,5,5,.8)">Aconselho a você que seja sambista também</h2></div>
</section>
  
<div class="divider"></div>
   
<div class="container" id="section3">
  	<div class="col-sm-8 col-sm-offset-2 text-center">
<?php 
$modelGaleria = Galeria::model()->findAll(null, 'order by (idgaleria) DESC'); 
foreach ($modelGaleria as $value) { ?>
	
	<h2><?php echo $value['titulo']; ?></h2>
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

      
   
  	</div><!--/col-->
</div><!--/container-->

<div class="divider"></div>
  <?php
  $modelGaleria = Videos::model()->findAll(null, 'order by (idgaleria) DESC'); 
$i = 0;
foreach ($modelGaleria as $value) {
	$titulo[$i] = $value->titulo;
	$url[$i] = $value->url;
	$descricao[$i] = $value->descrico;
	
	
	$i++;
} 
  
  
   ?>
    
   <section class="bg-3" id="">
  <div class="col-sm-6 col-sm-offset-3 text-center"><h2 style="padding:20px;background-color:rgba(5,5,5,.8)">Samba e prazer tem tudo a ver</h2></div>
</section>
 <div class="divider" id="section6"></div> 
      <div class="page-header text-center">
      <h1>Agenda</h1>
    </div>
 
<div class="continer bg-4">
	<div class="row">
	   	<?php
	   			 $modelAgenda = Agenda::model()->findAll(); 
				 foreach ($modelAgenda as $value) {				
				     $this->renderPartial('/agenda/_view2',array('data'=>$value ));
				 }		
	   	
	   	 ?>

   </div>
   </div>

   
<section class="bg-3" id="">
  <div class="col-sm-6 col-sm-offset-3 text-center"><h2 style="padding:20px;background-color:rgba(5,5,5,.8)">Samba e prazer tem tudo a ver</h2></div>
</section>
  <div class="divider" id="section2"></div>
<div class="continer bg-4">
	<div class="row">
   	<?php
	   			 $modelVideo = Videos::model()->findAll(); 
				 foreach ($modelVideo as $value) {				
				     $this->renderPartial('/videos/_view2',array('data'=>$value ));
				 }		
	   	
	   	 ?>
	</div><!--/row-->
</div><!--/container-->

<div class="divider" id="section4"></div>

<div class="row">
  
  <h1 class="text-center">Encontre-nos ?</h1>

  <!-- <div id="map-canvas"></div> -->
  <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3454.550509625612!2d-51.1105871!3d-30.021060499999997!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9519766ad6066b59%3A0xd71e059fc4f51a42!2sAv.+Juscelino+Kubitschek+de+Oliveira+-+Rubem+Berta%2C+Porto+Alegre+-+RS%2C+91240-090!5e0!3m2!1spt-PT!2sbr!4v1409764043947" width="100%" height="400" frameborder="0" style="border:0"></iframe>
  
  <hr>

<div class="divider" id="section5"></div>
  <div class="col-sm-8">
	     
      <div class="form">
      	<?php 	
	$model=new ContactForm;
	$this->renderPartial('/site/contact', array('model'=>$model)); 
	?> 
     
      </div>
 
    
  </div>
  <div class="col-sm-3 pull-right">

      <address>
        <strong>Iatek, LLC.</strong><br>
        795 Folsom Ave, Suite 600<br>
        Newport, RI 94107<br>
        P: (123) 456-7890
      </address>
    
      <address>
        <strong>Email Us</strong><br>
        <a href="mailto:#">grupondb@grupondb.com.br</a>
      </address>          
  </div>
  
</div><!--/row-->

<div class="container">
  	<div class="col-sm-8 col-sm-offset-2 text-center">
      <h2>Mega Pixel</h2>
      
      <hr>
      <h4>
        Desenvolvemos soluções web e mobille.
      </h4>
      <p>Visite nosso site e veja nosso portfólio <a href="http://bootply.com">www.megapixel.com</a>. Obrigado.</p>
      <hr>
      <ul class="list-inline center-block">
        <li><a href="https://www.facebook.com/megaa.pixel?fref=ts"><img src="/NDB/protected/images/face_32x32.png"></a></li>
        <li><a href="https://twitter.com/MeegaaPixel"><img src="/NDB/protected/images/twitter_32x32.png"></a></li>
        <li><a href="#"><img src="/NDB/protected/images/linkedin_32x32.png"></a></li>
     
      </ul>
      
  	</div><!--/col-->
</div><!--/container-->
  
</div><!--/wrap-->

<div id="footer">
  <div class="container">
    <!-- <p class="text-muted">This Bootstrap Example courtesy <a href="http://www.bootply.com">Bootply.com</a></p> -->
  </div>
</div>

<!-- <ul class="nav pull-right scroll-top">
  <li><a href="#" title="Scroll to top"><i class="glyphicon glyphicon-chevron-up"></i></a>
 
  </li>
  
</ul> -->

	<!-- script references -->
		<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="http://maps.googleapis.com/maps/api/js?sensor=false&extension=.js&output=embed"></script>
		<script src="js/scripts.js"></script>
		
		<!-- jQuery -->

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
		
		
	</body>
</html>