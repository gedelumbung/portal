<?php

class Cms_admin_profilController extends Controller
{
	public $layout = "main_cms_admin";

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
	
	public function actionIndex()
	{
		$model=$this->loadModel(Yii::app()->user->id);

		if(isset($_POST['UserAdminModel']))
		{
			$model->attributes=$_POST['UserAdminModel'];

			if(!empty($_POST['UserAdminModel']['password']))
			{
				$acak=$model->generateSalt();
				$model->password=$model->hashPassword($_POST['UserAdminModel']['password'],$acak);
			}

			if($model->save())
				Yii::app()->user->setFlash('result',"Profil berhasil diperbaharui");
				$this->redirect(array('index'));
		}

		$this->render('index',array(
			'model'=>$model,
		));
	}

	public function loadModel($id)
	{
		$model=UserAdminModel::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}
}