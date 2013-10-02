

<h2><?php echo $model->judul; ?></h2>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'isi',
		'tanggal',
		'UserBidang.nama',
		'Bidang.nama_bidang',
	),
)); ?>
