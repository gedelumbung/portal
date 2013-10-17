<?php
/* @var $this Cms_admin_info_pengadaanController */
/* @var $model PengadaanCms */

$this->breadcrumbs=array(
	'Pengadaan Cms'=>array('index'),
	$model->id_pengadaan,
);

$this->menu=array(
	array('label'=>'List PengadaanCms', 'url'=>array('index')),
	array('label'=>'Update PengadaanCms', 'url'=>array('update', 'id'=>$model->id_pengadaan)),
	array('label'=>'Delete PengadaanCms', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_pengadaan),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage PengadaanCms', 'url'=>array('admin')),
);
?>

<h1>View PengadaanCms #<?php echo $model->id_pengadaan; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_pengadaan',
		'judul',
		array(
			"type"=>"raw",
			"name"=>"isi",
			"data"=>$model->isi),
		'tanggal',
		'UserBidang.nama',
		'Bidang.nama_bidang',
		'status_pengadaan',
	),
)); ?>
