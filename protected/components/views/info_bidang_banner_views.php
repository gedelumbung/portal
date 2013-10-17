
<?php foreach($dt as $d): ?>
	<div class="date"><?php echo $d->tanggal; ?> - <em>oleh : <?php echo $d->UserBidang->nama; ?></em></div>
	<div class="cleaner_h5"></div>
	<h2><a href="<?php echo Yii::app()->baseUrl; ?>/info_bidang/<?php echo $d->id_info; ?>"><?php echo $d->judul; ?></a></h2>
	<div class="cleaner_h5"></div>
	<?php echo substr(strip_tags($d->isi),0,100); ?>
	<div class="cleaner_h10"></div>
	<div class="line_dotted"></div>
	<div class="cleaner_h10"></div>
<?php endforeach; ?>


