<?php
/* @var $this Cms_admin_info_pemenang_pengadaanController */
/* @var $model PemenangPengadaanCms */

$this->breadcrumbs=array(
	'Pemenang Pengadaan Cms'=>array('index'),
	$model->id_pemenang_pengadaan,
);

$this->menu=array(
	array('label'=>'List Pemenang Pengadaan', 'url'=>array('index')),
);
?>

<h1>View PemenangPengadaanCms #<?php echo $model->id_pemenang_pengadaan; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_pemenang_pengadaan',
		'no_reff',
		'tgl_pengumuman',
		'kode_lelang',
		'nama_pemenang_1',
		'nilai_penawaran_1',
		'npwp_1',
		'nama_pemenang_2',
		'nilai_penawaran_2',
		'npwp_2',
		'nama_pemenang_3',
		'nilai_penawaran_3',
		'npwp_3',
	),
)); ?>
