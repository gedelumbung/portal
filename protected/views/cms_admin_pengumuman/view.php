<?php
/* @var $this Cms_admin_pengumumanController */
/* @var $model PengumumanCms */

$this->breadcrumbs=array(
	'Pengumuman Cms'=>array('index'),
	$model->id_pengumuman,
);

$this->menu=array(
	array('label'=>'List PengumumanCms', 'url'=>array('index')),
	array('label'=>'Update PengumumanCms', 'url'=>array('update', 'id'=>$model->id_pengumuman)),
	array('label'=>'Delete PengumumanCms', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_pengumuman),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage PengumumanCms', 'url'=>array('admin')),
);
?>

<h1>View PengumumanCms #<?php echo $model->id_pengumuman; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_pengumuman',
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
