<?php

class PengumumanWidget extends CWidget {

    public function run() {

        $criteria = new CDbCriteria;
        $criteria->order = 'id_pengumuman DESC';
        $criteria->limit = 5;
        $criteria->offset = 0;

        $dt = Pengumuman::model()->findAll($criteria);

        $this->render('pengumuman_views', array(
            'dt'=>$dt   
        ));
    }
}