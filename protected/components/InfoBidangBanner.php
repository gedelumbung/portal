<?php

class InfoBidangBanner extends CWidget {

    public function run() {

        $criteria = new CDbCriteria;
        $criteria->order = 'id_info DESC';
        $criteria->limit = 2;
        $criteria->offset = 0;

        $dt = InfoBidang::model()->findAll($criteria);

        $this->render('info_bidang_banner_views', array(
            'dt'=>$dt   
        ));
    }
}