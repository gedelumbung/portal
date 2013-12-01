

<h2><?php echo $model->nama_lelang; ?></h2>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'kode_lelang',
		'tgl_pengumuman',
		'nama_lelang',
		'kategori',
		'anggaran',
		'nilai_pagu',
		'nilai_hps',
		'kualifikasi_usaha',
		array(
			'name'=>'Informasi_tambahan',
			'type'=>'raw'),
		'stts',
	),
)); ?>
