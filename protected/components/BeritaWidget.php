<?php

class BeritaWidget extends CWidget {

    public function run() {

        $criteria = new CDbCriteria;
        $criteria->order = 'id_berita DESC';
        $criteria->limit = 5;
        $criteria->offset = 0;

        $dt = Berita::model()->findAll($criteria);

        $this->render('berita_views', array(
            'dt'=>$dt   
        ));
    }
}