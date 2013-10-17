<?php

class Cms_admin_user_perusahaanController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/main_cms_admin';

	public function init()
	{
		if (Yii::app()->user->isGuest) 
		{
			$this->redirect(array("site/index"));
		}
		else if(Yii::app()->user->level!="admin")
		{
			$this->redirect(array("site/index"));
		}
	}

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
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id)
	{
		$model=$this->loadModel($id);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['UserPerusahaanCms']))
		{
			$model->attributes=$_POST['UserPerusahaanCms'];

			$cntCriteria = new CDbCriteria();
			$cntCriteria->condition = "username = '".$_POST['UserPerusahaanCms']['username']."' ";
			$cek = UserPerusahaanCms::model()->count($cntCriteria);

			if($cek==1)
			{
				if(!empty($_POST['UserPerusahaanCms']['password']))
				{
					$acak=$model->generateSalt();
					$model->password=$model->hashPassword($_POST['UserPerusahaanCms']['password'],$acak);
				}
				if($model->save())
					$this->redirect(array('view','id'=>$model->id_user));
			}
			else
			{
				if($cek>0)
				{
					Yii::app()->user->setFlash('result',"Username telah terpakai. Gunakan username yang lainnya.");
				}
				else
				{
					if(!empty($_POST['UserPerusahaanCms']['password']))
					{
						$acak=$model->generateSalt();
						$model->password=$model->hashPassword($_POST['UserPerusahaanCms']['password'],$acak);
					}
					if($model->save())
						$this->redirect(array('view','id'=>$model->id_user));
				}
			}

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
		$model=$this->loadModel($id);

		$this->loadModel($id)->delete();
		$this->loadModelPermohonan($model->id_user)->delete();

		// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
		if(!isset($_GET['ajax']))
			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$model=new UserPerusahaanCms('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['UserPerusahaanCms']))
			$model->attributes=$_GET['UserPerusahaanCms'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new UserPerusahaanCms('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['UserPerusahaanCms']))
			$model->attributes=$_GET['UserPerusahaanCms'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return UserPerusahaanCms the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=UserPerusahaanCms::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}
	public function loadModelPermohonan($id)
	{
		$cr = new CDbCriteria();
		$cr->condition = "id_user = '".$id."' ";
		$model=Permohonan::model()->find($cr);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param UserPerusahaanCms $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='user-perusahaan-model-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
