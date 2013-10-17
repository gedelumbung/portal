<?php

class BeritaFrontWidget extends CWidget {

    public function run() {

        $criteria = new CDbCriteria;
        $criteria->order = 'id_berita DESC';
        $criteria->limit = 3;
        $criteria->offset = 0;

        $dt = Berita::model()->findAll($criteria);

        $this->render('berita_front_views', array(
            'dt'=>$dt   
        ));
    }
}