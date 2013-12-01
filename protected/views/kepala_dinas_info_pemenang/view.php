

<h2><?php echo $model->Pengadaan->nama_lelang; ?></h2>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'no_reff',
		'tgl_pengumuman',
		array(
			'name'=>'kode_lelang',
			'label'=>'Kode Lelang',
			'value'=>$model->Pengadaan->kode_lelang),
		'nama_pemenang_1',
		'nilai_penawaran_1',
		'npwp_1',
		'nama_pemenang_2',
		'nilai_penawaran_2',
		'npwp_2',
		'nama_pemenang_3',
		'nilai_penawaran_3',
		'npwp_3',
		array(
			'name'=>'stts',
			'label'=>'Status',
			'value'=>$model->Pengadaan->stts),
	),
)); ?>
