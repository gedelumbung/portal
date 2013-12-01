<?php

class Cms_adminController extends Controller
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
		$this->render('index');
	}
}