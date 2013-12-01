<?php
/* @var $this Dashboard_info_pengadaanController */
/* @var $model InfoPengadaan */

$this->breadcrumbs=array(
	'Info Pengadaans'=>array('index'),
	$model->kode_lelang,
);

$this->menu=array(
	array('label'=>'List InfoPengadaan', 'url'=>array('index')),
	array('label'=>'Create InfoPengadaan', 'url'=>array('create')),
	array('label'=>'Update InfoPengadaan', 'url'=>array('update', 'id'=>$model->kode_lelang)),
	array('label'=>'Delete InfoPengadaan', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->kode_lelang),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage InfoPengadaan', 'url'=>array('admin')),
);
?>

<h1>View InfoPengadaan #<?php echo $model->kode_lelang; ?></h1>

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
		'Informasi_tambahan',
		'stts',
	),
)); ?>
