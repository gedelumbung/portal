<ul>
<?php foreach($dt as $d): ?>
	<li>
		<h4><?php echo $d->tanggal; ?></h4>
		<a href="<?php echo Yii::app()->baseUrl; ?>/info_bidang/<?php echo $d->id_info; ?>" title="<?php echo $d->judul; ?>">
		<?php echo $d->judul; ?>
		</a>
	</li>
<?php endforeach; ?>
</ul>

