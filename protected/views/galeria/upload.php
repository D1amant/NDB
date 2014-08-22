<?php

// A list of permitted file extensions
$allowed = array('png', 'jpg', 'gif','zip');




for ($i = 0; $i <  count($_FILES['upl']); $i++ ){

if(isset($_FILES['upl']) && $_FILES['upl']['error'][$i] == 0){

	
	if(move_uploaded_file($_FILES['upl']['tmp_name'][$i], '/var/www/Dropbox/projetos/web/NDB/protected/views/galeria/uploads/galeria1/'.$_FILES['upl']['name'][$i])){
		echo '{"status":"success"}';
		
	}
 }
}


?>


















