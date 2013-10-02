<ul>
<?php foreach($dt as $d): ?>
	<li>
		<h4><?php echo $d->tanggal; ?></h4>
		<a href="<?php echo Yii::app()->baseUrl; ?>/berita/<?php echo $d->id_berita; ?>" title="<?php echo $d->judul; ?>">
		<?php echo $d->judul; ?>
		</a>
	</li>
<?php endforeach; ?>
</ul>

