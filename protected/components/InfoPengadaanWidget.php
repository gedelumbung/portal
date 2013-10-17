<?php

class InfoPengadaanWidget extends CWidget {

    public function run() {

        $criteria = new CDbCriteria;
        $criteria->order = 'id_pengadaan DESC';
        $criteria->limit = 5;
        $criteria->offset = 0;

        $dt = InfoPengadaan::model()->findAll($criteria);

        $this->render('info_pengadaan_views', array(
            'dt'=>$dt   
        ));
    }
}