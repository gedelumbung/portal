<?php
/* @var $this Cms_admin_user_bidangController */
/* @var $model UserBidang */

$this->breadcrumbs=array(
	'User Bidangs'=>array('index'),
	$model->id_user,
);

$this->menu=array(
	array('label'=>'List UserBidang', 'url'=>array('index')),
	array('label'=>'Create UserBidang', 'url'=>array('create')),
	array('label'=>'Update UserBidang', 'url'=>array('update', 'id'=>$model->id_user)),
	array('label'=>'Delete UserBidang', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_user),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage UserBidang', 'url'=>array('admin')),
);
?>

<h1>View UserBidang #<?php echo $model->id_user; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_user',
		'Bidang.nama_bidang',
		'nama',
		'username',
		'password',
		'pengadaan',
	),
)); ?>
