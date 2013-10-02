<?php

class BidangWidget extends CWidget {

    public function run() {

        $dt = Bidang::model()->findAll();

        $this->render('bidang_views', array(
            'dt'=>$dt   
        ));
    }
}