<h2><?php echo $nama_bidang; ?></h2>

<ul>
	<li><a href="<?php echo Yii::app()->baseUrl; ?>/info_bidang/get/<?php echo $id_bidang; ?>">Info <?php echo $nama_bidang; ?></a></li>
	<li><a href="<?php echo Yii::app()->baseUrl; ?>/pengumuman/get/<?php echo $id_bidang; ?>">Pengumuman <?php echo $nama_bidang; ?></a></li>
	<li><a href="<?php echo Yii::app()->baseUrl; ?>/berita/get/<?php echo $id_bidang; ?>">Berita <?php echo $nama_bidang; ?></a></li>
</ul>