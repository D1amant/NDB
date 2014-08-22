<?php

class GaleriaController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/column3';

	/**
	 * @return array action filters
	 */
	public function filters()
	{
		return array(
			'accessControl', // perform access control for CRUD operations
		//	'postOnly + delete', // we only allow deletion via POST request
		);
	}

	/**
	 * Specifies the access control rules.
	 * This method is used by the 'accessControl' filter.
	 * @return array access control rules
	 */
	public function accessRules()
	{
		return array(
			array('allow',  // allow all users to perform 'index' and 'view' actions
				'actions'=>array('index','view'),
				'users'=>array('*'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' and 'delete' and 'admin' actions
				'actions'=>array('create', 'delete', 'admin'),
				'users'=>array('@'),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array(),
				'users'=>array('admin'),
			),
			array('deny',  // deny all users
				'actions' => array('update'),
				'users'=>array('*'),
				
			),
		);
	}

	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionView($id)
	{
		$this->render('view',array(
			'model'=>$this->loadModel($id),
		));
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$model= null;
		$caminho = "/var/www/NDB/protected/views/galeria/uploads/";
		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		
	
		
		if(isset($_FILES['upl']))
		{
		$model=new Galeria;		
		$diretorio = GaleriaController::criaDiretorio ();
			
				
	    		for ($i = 0; $i <  count($_FILES['upl']); $i++ ){

					if(isset($_FILES['upl']) && $_FILES['upl']['error'][$i] == 0){
						
					$img = Yii::app()->imagemod->load($_FILES['upl']['tmp_name'][$i]);
					$img->image_resize          = true;
					$img->image_ratio_y         = true;
					$img->image_x               = 400;
					
			     	
			     	$model->imagem .= $img->file_new_name_body = $img->file_src_name;
					$model->imagem .= ";";
					$img->process($caminho.$diretorio);
					if ($img->processed) {
						
					echo 'image resized';
					$img->clean();
					} else {
					echo 'error : ' . $img->error;
					}
 					}
				}
				
		
		
				$model->titulo = $_POST['titulo'];
				$model->descricao = $_POST['descricao'];	   
				$model->diretorio = $diretorio;
				$model->dataCriacao = date("Y-m-d");
			
			if($model->save())
				$this->redirect(array('view','id'=>$model->idgaleria));
		}

		$this->render('create',array(
			'model'=>$model,
		));
	}
	
	
    /**
	 * Criando novo diretorio para envio das imagems 
	 */
	 
	
	protected function criaDiretorio (){
			
		$dir = "/var/www/NDB/protected/views/galeria/uploads/";
		$diretorio = scandir($dir);
		$novoDiretorio = count($diretorio);
		mkdir($dir.$novoDiretorio , 0777 , true);
		chmod($dir.$novoDiretorio, 0777);
		return  $novoDiretorio;
				
	}


/**
 * Esse metodo esclui o diretorio
 *@param 
 *@return boolean
 */
	protected function excluiDiretorio ($val){
			
		$dir = "/var/www/NDB/protected/views/galeria/uploads/";
			
		$diretorio = scandir($dir.$val);
		for ($i = 2; $i < count($diretorio); $i++){

			unlink($dir.$val."/".$diretorio[$i]);
			
   }
	
		rmdir($dir.$val);
		return  true;
				
	}




	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id)
	{
		$model=$this->loadModel($id);

		$caminho = "/var/www/NDB/protected/views/galeria/uploads/";
		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		
	
		
		if(isset($_FILES['upl']))
		{
				
		$diretorio = GaleriaController::criaDiretorio ();
			
				
	    		for ($i = 0; $i <  count($_FILES['upl']); $i++ ){

					if(isset($_FILES['upl']) && $_FILES['upl']['error'][$i] == 0){
						
						
						
				    $img = Yii::app()->imagemod->load($_FILES['upl']['tmp_name'][$i]);
					$img->image_resize          = true;
					$img->image_ratio_y         = true;
					$img->image_x               = 10;
					$img->file_new_name_body = md5($img->file_src_name);
					$img->process($caminho.$diretorio);
					if ($img->processed) {
						$model->imagem .= $img->file_new_name_body;
					echo 'image resized';
					$img->clean();
					} else {
					echo 'error : ' . $img->error;
					}
						
					      // if(move_uploaded_file($_FILES['upl']['tmp_name'][$i], $caminho.$diretorio."/".$_FILES['upl']['name'][$i])){
// 		                    
							// $model->imagem .= $_FILES['upl']['name'][$i].";";
// 							
// 						
						  // }
 					}
				}
				
		}		
			if(isset($_POST['idGaleria']))
		{
		
				$model->titulo = $_POST['titulo'];
				$model->descricao = $_POST['descricao'];	   
				$model->diretorio = $diretorio;

		
	
			$model->attributes=$_POST['Galeria'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->idgaleria));
		}

		$this->render('update',array(
			'model'=>$model,
		));
	}

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 * 
	 */
	public function actionDelete($id)
	{
		$delet = 0;
		$model=Galeria::model()->findByPk($id);
		
		$excluirDiretorio = GaleriaController::excluiDiretorio($model->diretorio);
		
	if ($excluirDiretorio){	
		
		if($this->loadModel($id)->delete()){
		
		$delet =1; 
		$this->redirect(array('admin' , 'delet' => $delet));
		}else{
			$delet =2; 
		$this->redirect(array('admin' , 'delet' => $delet));
			
		}
	}else{
			$delet =2; 
		$this->redirect(array('admin' , 'delet' => $delet));
			
	}	
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$model = Galeria::model()->findAll(null, 'order by (idgaleria) DESC'); 
		$this->render('index',array(
			'model'=>$model,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		 $delet = $_GET['delet'];
		if($delet == 1){
			Yii::app()->user->setFlash('success', '<strong>Atenção!!! </strong>Registro salvo com sucesso!!!');
		}elseif ($delet == 2){
			Yii::app()->user->setFlash('error', '<strong>Putz!!!</strong> Registro não foi salvo...');
		}
		
		
		$model=new Galeria('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Galeria']))	$model->attributes=$_GET['Galeria'];

		$this->render('admin',array(
			'model'=>$model,
		));
		
		
		
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Galeria the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Galeria::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Galeria $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='galeria-form' )
		{
		echo CActiveForm::validate($model);
		Yii::app()->end();
		}
		}


}
	