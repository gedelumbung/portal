<ul>
<?php foreach($dt as $d): ?>
	<li>
		<h4><?php echo $d->tanggal; ?></h4>
		<a href="<?php echo Yii::app()->baseUrl; ?>/pengadaan/<?php echo $d->id_pengadaan; ?>" title="<?php echo $d->judul; ?>">
		<?php echo $d->judul; ?>
		</a>
	</li>
<?php endforeach; ?>
</ul>

