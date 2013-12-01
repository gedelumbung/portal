<div id="title-news">PROFIL DINAS</div>
<?php
 	$criteria = new CDbCriteria;
    $criteria->condition = 'id_bidang = 100';

    $dt = Profil::model()->findAll($criteria);

    foreach($dt as $p)
    {
    	echo $p->isi;
    }

?>