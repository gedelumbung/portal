<?php

class Dashboard_profilController extends Controller
{
	public $layout = "main_bidang";
	public function actionIndex()
	{
		$model=$this->loadModel(Yii::app()->user->id);

		if(isset($_POST['UserBidang']))
		{
			$model->attributes=$_POST['UserBidang'];

			if(!empty($_POST['UserBidang']['password']))
			{
				$acak=$model->generateSalt();
				$model->password=$model->hashPassword($_POST['UserBidang']['password'],$acak);
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
		$model=UserBidang::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

}