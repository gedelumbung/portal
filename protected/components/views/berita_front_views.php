
<?php foreach($dt as $d): ?>
	<div class="view">

	<table>
		<tr>
			<td><h3><a href="<?php echo Yii::app()->baseUrl; ?>/berita/<?php echo $d->id_berita; ?>"><?php echo CHtml::encode($d->judul); ?></a></h3></td>
		</tr>
		<tr>
			<td><b>Posted on : <?php echo CHtml::encode($d->tanggal); ?> | By : <?php echo CHtml::encode($d->UserBidang->nama); ?> | <?php echo CHtml::encode($d->Bidang->nama_bidang); ?></b></td>
		</tr>
		<tr>
			<td><?php echo substr(strip_tags($d->isi),0,100); ?>...</td>
		</tr>
	</table>

	<div class="cleaner_h5"></div>
	<hr>
	<div class="cleaner_h5"></div>
</div>
<?php endforeach; ?>

