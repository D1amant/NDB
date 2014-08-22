
		<!-- The main CSS file -->
		
		<!-- upload.php <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/up.css" media="print" /> -->
	

		<form id="upload" method="post" action="<?php echo Yii::app()->request->baseUrl; ?>/protected/views/galeria/upload.php" enctype="multipart/form-data">
			
			<input type="file" name="upl[]" multiple />
			
			<div id="drop">
				Drop Here

				<a>Browse</a>
				
			</div>

			<ul>
				<!-- The file uploads will be shown here -->
			</ul>
			<input type="submit" value="Enviar" />
		</form>


        
		<!-- JavaScript Includes -->
		
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
		<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/up/jquery.knob.js"></script>

		<!-- jQuery File Upload Dependencies -->
		<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/up/jquery.ui.widget.js"></script>
		<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/up/jquery.iframe-transport.js"></script>
		<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/up/jquery.fileupload.js"></script>
		
		<!-- Our main JS file
		<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/up/script.js"></script>
 -->

