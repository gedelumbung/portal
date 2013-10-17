<?php
/* @var $this Dashboard_info_pengadaanController */
/* @var $model InfoPengadaan */

$this->breadcrumbs=array(
	'Info Pengadaans'=>array('index'),
	$model->id_pengadaan,
);

$this->menu=array(
	array('label'=>'List InfoPengadaan', 'url'=>array('index')),
	array('label'=>'Create InfoPengadaan', 'url'=>array('create')),
	array('label'=>'Update InfoPengadaan', 'url'=>array('update', 'id'=>$model->id_pengadaan)),
	array('label'=>'Delete InfoPengadaan', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_pengadaan),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage InfoPengadaan', 'url'=>array('admin')),
);
?>

<h1>View InfoPengadaan #<?php echo $model->id_pengadaan; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_pengadaan',
		'judul',
		array(
			'type'=>'raw',
			'name'=>'isi'
			),
		'tanggal',
		'UserBidang.nama',
		'Bidang.nama_bidang',
	),
)); ?>
