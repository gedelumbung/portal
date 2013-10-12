<?php

class Dashboard_info_pemenang_pengadaanController extends Controller
{
	public function init()
	{
		if (Yii::app()->user->isGuest) 
		{
			$this->redirect(array("site/index"));
		}
		else if(Yii::app()->user->pengadaan==0)
		{
			$this->redirect(array("site/index"));
		}
	}
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/main_bidang';

	/**
	 * @return array action filters
	 */
	public function filters()
	{
		return array(
			'accessControl', // perform access control for CRUD operations
			'postOnly + delete', // we only allow deletion via POST request
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
				'actions'=>array('index','view','create','update','admin','delete'),
				'users'=>array('*'),
			),
			array('deny',  // deny all users
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
		$model=new PemenangPengadaan;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['PemenangPengadaan']))
		{
			$model->attributes=$_POST['PemenangPengadaan'];
			$model->tanggal = gmdate("d-M-Y H:i:s",time()+3600*7);
			$model->id_user = Yii::app()->user->id;
			$model->id_bidang = Yii::app()->user->id_bidang;
			$model->stts = 0;
			if($model->save())
				$this->redirect(array('view','id'=>$model->id_pemenang_pengadaan));
		}

		$this->render('create',array(
			'model'=>$model,
		));
	}

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id)
	{
		$model=$this->loadModel($id);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['PemenangPengadaan']))
		{
			$model->attributes=$_POST['PemenangPengadaan'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->id_pemenang_pengadaan));
		}

		$this->render('update',array(
			'model'=>$model,
		));
	}

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */
	public function actionDelete($id)
	{
		$this->loadModel($id)->delete();

		// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
		if(!isset($_GET['ajax']))
			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$model=new PemenangPengadaan('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['PemenangPengadaan']))
			$model->attributes=$_GET['PemenangPengadaan'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new PemenangPengadaan('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['PemenangPengadaan']))
			$model->attributes=$_GET['PemenangPengadaan'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return PemenangPengadaan the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=PemenangPengadaan::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param PemenangPengadaan $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='pemenang-pengadaan-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
