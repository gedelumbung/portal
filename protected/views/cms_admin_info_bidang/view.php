<?php
/* @var $this Cms_admin_info_bidangController */
/* @var $model InfoBidangCms */

$this->breadcrumbs=array(
	'Info Bidang Cms'=>array('index'),
	$model->id_info,
);

$this->menu=array(
	array('label'=>'List InfoBidangCms', 'url'=>array('index')),
	array('label'=>'Update InfoBidangCms', 'url'=>array('update', 'id'=>$model->id_info)),
	array('label'=>'Delete InfoBidangCms', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_info),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage InfoBidangCms', 'url'=>array('admin')),
);
?>

<h1>View InfoBidangCms #<?php echo $model->id_info; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_info',
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
