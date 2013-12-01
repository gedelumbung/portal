<?php
/* @var $this Cms_admin_bidangController */
/* @var $model Bidang */

$this->breadcrumbs=array(
	'Bidangs'=>array('index'),
	$model->id_bidang,
);

$this->menu=array(
	array('label'=>'List Bidang', 'url'=>array('index')),
	array('label'=>'Create Bidang', 'url'=>array('create')),
	array('label'=>'Update Bidang', 'url'=>array('update', 'id'=>$model->id_bidang)),
	array('label'=>'Delete Bidang', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_bidang),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Bidang', 'url'=>array('admin')),
);
?>

<h1>View Bidang #<?php echo $model->id_bidang; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_bidang',
		'nama_bidang',
	),
)); ?>
