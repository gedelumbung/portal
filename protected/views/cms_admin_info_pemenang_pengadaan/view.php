<?php
/* @var $this Cms_admin_info_pemenang_pengadaanController */
/* @var $model PemenangPengadaanCms */

$this->breadcrumbs=array(
	'Pemenang Pengadaan Cms'=>array('index'),
	$model->id_pemenang_pengadaan,
);

$this->menu=array(
	array('label'=>'List PemenangPengadaanCms', 'url'=>array('index')),
	array('label'=>'Update PemenangPengadaanCms', 'url'=>array('update', 'id'=>$model->id_pemenang_pengadaan)),
	array('label'=>'Delete PemenangPengadaanCms', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_pemenang_pengadaan),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage PemenangPengadaanCms', 'url'=>array('admin')),
);
?>

<h1>View PemenangPengadaanCms #<?php echo $model->id_pemenang_pengadaan; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_pemenang_pengadaan',
		'judul',
		array(
			"type"=>"raw",
			"name"=>"isi",
			"data"=>$model->isi),
		'tanggal',
		'UserBidang.nama',
		'Bidang.nama_bidang',
	),
)); ?>
