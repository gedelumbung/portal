<?php

class BidangWidget extends CWidget {

    public function run() {

    	$c = new CDbCriteria();
    	$c->condition = "id_bidang !='100' ";
        $dt = Bidang::model()->findAll($c);

        $this->render('bidang_views', array(
            'dt'=>$dt   
        ));
    }
}