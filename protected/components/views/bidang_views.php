<ul>
<?php foreach($dt as $d): ?>
	<li>
		<a href="<?php echo Yii::app()->baseUrl; ?>/bidang/route/<?php echo $d->id_bidang; ?>" title="<?php echo $d->nama_bidang; ?>">
		<?php echo $d->nama_bidang; ?>
		</a>
	</li>
<?php endforeach; ?>
</ul>

