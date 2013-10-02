<?php

class InfoBidangWidget extends CWidget {

    public function run() {

        $criteria = new CDbCriteria;
        $criteria->order = 'id_info DESC';
        $criteria->limit = 5;
        $criteria->offset = 0;

        $dt = InfoBidang::model()->findAll($criteria);

        $this->render('info_bidang_views', array(
            'dt'=>$dt   
        ));
    }
}