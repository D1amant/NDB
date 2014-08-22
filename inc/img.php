<?php 


error_reporting(E_ALL);




if($_GET['nomeImagem']){
	
      $file =  '/var/www/NDB/protected/views/galeria/uploads/'. $_GET['diretorio'] ."/". $_GET['nomeImagem'].".jpg";
   
       $type = 'image/jpeg';
       header('Content-Type:'.$type);
       header('Content-Length: ' . filesize($file));
       readfile($file);
	  
}




?>