<?php

class BidangController extends Controller
{
	public function actionRoute()
	{
        $criteria = new CDbCriteria;
        $criteria->condition = 'id_bidang = '.Yii::app()->getRequest()->getQuery('id').'';
        $data = Bidang::model()->find($criteria);

        $dt['nama_bidang'] = $data->nama_bidang;
        $dt['id_bidang'] = $data->id_bidang;

		$this->render('route',$dt);
	}
}