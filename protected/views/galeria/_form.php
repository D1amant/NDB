<!-- protected/views/galeria/upload.php  -->
<div class ="form">

	<?php
$action = "create";


if(!isset($model) || empty($model)){

	?>
	<form  method="post" action="<?php echo Yii::app() -> request -> baseUrl; ?>/index.php/galeria/<?php echo $action; ?>" enctype="multipart/form-data">
		<?php }else{
		$action = "update";
		?>

		<form  method="post" action="<?php echo Yii::app() -> request -> baseUrl; ?>/index.php/galeria/<?php echo $action; ?>" enctype="multipart/form-data">
			<input type = "hidden" name = "idGaleria" value = "<?php echo $model->idgaleria; ?>" />
<?php } ?>

			<label>Titulo</label>
			<input type="text" name="titulo" <?php if(isset($model)){ ?> value="<?php echo $model -> titulo; ?>" <?php } ?> />
			<br/>
			<br/>
			<label>Imagens</label>
			<input type="file" name="upl[]" multiple   />
			<br/>
			<br/>
			<textarea name = 'descricao' rows="5" cols="20" onclick="this.value = '' " ><?php
				if (isset($model)) {  echo $model -> descricao;
				}
 ?></textarea>
			<br/>
			<br/>
			<input type="submit" value="Salvar" />
		</form>
</div>