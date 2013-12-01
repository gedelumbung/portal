<?php

class Kepala_dinas_info_pemenangController extends Controller
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
	
	public function actionView($id)
	{
		$this->render('view',array(
			'model'=>$this->loadModel($id),
		));
	}

	public function actionIndex()
	{
        $dt['nama_bidang'] = "";
        $dt['id_bidang'] = "";

		$dataProvider=new CActiveDataProvider('PemenangPengadaan');

		$dt['dataProvider'] = $dataProvider;
		$this->render('index',$dt);
	}

	public function actionGet()
	{
        $criteria1 = new CDbCriteria;
        $criteria1->condition = 'id_bidang = '.Yii::app()->getRequest()->getQuery('id').'';
        $data = Bidang::model()->find($criteria1);

        $dt['nama_bidang'] = $data->nama_bidang;
        $dt['id_bidang'] = $data->id_bidang;

		$param = Yii::app()->getRequest()->getQuery('id');
		$criteria=new CDbCriteria;
		$criteria->condition = "id_bidang = '".$param."'";
		$dataProvider=new CActiveDataProvider('PemenangPengadaan',array(
		    'criteria'=>$criteria
		    )
		);

		$dt['dataProvider'] = $dataProvider;
		$this->render('index',$dt);
	}

	public function loadModel($id)
	{
		$model=PemenangPengadaan::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}
}