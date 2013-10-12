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
		'judul',
		'isi',
		'tanggal',
		'id_user',
		'id_bidang',
		'stts',
	),
)); ?>
