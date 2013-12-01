<ul>
<?php foreach($dt as $d): ?>
	<li>
		<h4><?php echo $d->tgl_pengumuman; ?></h4>
		<a href="<?php echo Yii::app()->baseUrl; ?>/pengadaan/<?php echo $d->id_pengadaan; ?>" title="<?php echo $d->nama_lelang; ?>">
		<?php echo $d->nama_lelang; ?>
		</a>
	</li>
<?php endforeach; ?>
</ul>

