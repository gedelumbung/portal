<?php

class Kepala_dinasController extends Controller
{
	public $layout = "main_cms_kepala_dinas";

	public function init()
	{
		if (Yii::app()->user->isGuest) 
		{
			$this->redirect(array("site/index"));
		}
		else if(Yii::app()->user->level!="kepala_dinas")
		{
			$this->redirect(array("site/index"));
		}
	}
	
	public function actionIndex()
	{
		$this->render('index');
	}
}