<?php
/* @var $this Dashboard_info_pemenang_pengadaanController */
/* @var $model PemenangPengadaan */

$this->breadcrumbs=array(
	'Pemenang Pengadaans'=>array('index'),
	$model->id_pemenang_pengadaan,
);

$this->menu=array(
	array('label'=>'List PemenangPengadaan', 'url'=>array('index')),
	array('label'=>'Create PemenangPengadaan', 'url'=>array('create')),
	array('label'=>'Update PemenangPengadaan', 'url'=>array('update', 'id'=>$model->id_pemenang_pengadaan)),
	array('label'=>'Delete PemenangPengadaan', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_pemenang_pengadaan),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage PemenangPengadaan', 'url'=>array('admin')),
);
?>

<h1>View PemenangPengadaan #<?php echo $model->id_pemenang_pengadaan; ?></h1>

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
