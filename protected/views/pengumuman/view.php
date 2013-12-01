

<h2><?php echo $model->judul; ?></h2>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		array(
			'type'=>'raw',
			'name'=>'isi'
			),
		'tanggal',
		'UserBidang.nama',
		'Bidang.nama_bidang',
	),
)); ?>
