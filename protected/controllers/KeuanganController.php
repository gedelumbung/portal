<?php

class KeuanganController extends Controller
{
	public $layout = "main_cms_keuangan";

	public function init()
	{
		if (Yii::app()->user->isGuest) 
		{
			$this->redirect(array("site/index"));
		}
		else if(Yii::app()->user->level!="keuangan")
		{
			$this->redirect(array("site/index"));
		}
	}

	public function actionIndex()
	{
		$this->render('index');
	}
}