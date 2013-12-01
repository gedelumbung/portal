<?php

class Permohonan_perijinanController extends Controller
{
	public $layout='//layouts/main_perusahaan';

	public function actions()
	{
		return array(
			// captcha action renders the CAPTCHA image displayed on the contact page
			'captcha'=>array(
				'class'=>'CCaptchaAction',
				'backColor'=>0xFFFFFF,
			),
			// page action renders "static" pages stored under 'protected/views/site/pages'
			// They can be accessed via: index.php?r=site/page&view=FileName
			'page'=>array(
				'class'=>'CViewAction',
			),
		);
	}

	public function init()
	{
		if (Yii::app()->user->isGuest) 
		{
			//$this->actionReg();
		}
		else if(Yii::app()->user->level!="perusahaan")
		{
			$this->layout='//layouts/main';
			$this->render('error');
		}
	}

	public function actionIndex()
	{
		if (Yii::app()->user->isGuest) 
		{
			$this->redirect(Yii::app()->baseUrl."/permohonan_perijinan/reg");
		}
		else
		{
			$this->render('index',array(
				'model'=>$this->loadPermohonan(Yii::app()->user->id),
			));
		}
	}

	public function actionForm()
	{
		if (Yii::app()->user->isGuest) 
		{
			$this->redirect(Yii::app()->baseUrl."/permohonan_perijinan/reg");

		}
		else
		{
			$model=$this->loadPermohonan(Yii::app()->user->id);
			$this->performAjaxValidation($model);

			if(isset($_POST['Permohonan']))
			{

				$nama_file = CUploadedFile::getInstance($model, 'nama_file');
				if(!empty($nama_file))
				{
					$model->attributes=$_POST['Permohonan'];
		            $model->nama_file = uniqid(rand(),true).'.'.$nama_file->getExtensionName();
					if($model->save())
					{
						$path = Yii::getPathOfAlias('webroot').'/permohonan/'.$model->nama_file;
		                $nama_file->saveAs($path);

						$this->redirect(array('form','id'=>$model->id_permohonan));
					}
				}
				else
				{
					$model->attributes=$_POST['Permohonan'];
					if($model->save())
						$this->redirect(array('form','id'=>$model->id_permohonan));
				}
			}

			$this->render('form',array(
				'model'=>$model,
			));
		}
	}

	public function actionReg()
	{
		$this->layout='//layouts/main';

		$model=new UserPerusahaanModel;
		$model_permohonan=new Permohonan;
		$this->performAjaxValidation($model);

		if(isset($_POST['UserPerusahaanModel']))
		{
			$model->attributes=$_POST['UserPerusahaanModel'];

			$cntCriteria = new CDbCriteria();
			$cntCriteria->condition = "username = '".$_POST['UserPerusahaanModel']['username']."' ";
			$cek = UserPerusahaanModel::model()->count($cntCriteria);

			if($cek>0)
			{
				Yii::app()->user->setFlash('result',"Username telah terpakai. Gunakan username yang lainnya.");
			}
			else
			{
				$acak=$model->generateSalt();
				$model->password=$model->hashPassword($_POST['UserPerusahaanModel']['password'],$acak);

				$model->stts=0;
				$model->level="perusahaan";

				if($model->save())
					$model_permohonan->id_user = $model->id_user;
					$model_permohonan->nama_perusahaan = "-";
					$model_permohonan->alamat = "-";
					$model_permohonan->nama_file = "-";
					$model_permohonan->stts = "Belum Disetujui";

					if($model_permohonan->save())

					Yii::app()->user->setFlash('result',"Akun anda akan kami moderisasi terlabih dahulu.");
					$this->redirect(array('reg','id'=>$model->id_user));
			}
		}
		// display the login form
		$this->render('reg',array('model'=>$model));
	}
	public function loadModel($id)
	{
		$model=Permohonan::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}
	public function loadPermohonan($id)
	{

		$model=Permohonan::model()->find($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param UserCms $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='reg-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}