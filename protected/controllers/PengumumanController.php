<?php

class PengumumanController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/column2';


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

		$dataProvider=new CActiveDataProvider('Pengumuman');

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
		$dataProvider=new CActiveDataProvider('Pengumuman',array(
		    'criteria'=>$criteria
		    )
		);

		$dt['dataProvider'] = $dataProvider;
		$this->render('index',$dt);
	}

	public function loadModel($id)
	{
		$model=Pengumuman::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}
}
