<?php

class Cms_adminController extends Controller
{
	public $layout = "main_cms_admin";
	
	public function actionIndex()
	{
		$this->render('index');
	}
}