<?php
/* @var $this Dashboard_pengumumanController */
/* @var $model Pengumuman */

$this->breadcrumbs=array(
	'Pengumumen'=>array('index'),
	$model->id_pengumuman,
);

$this->menu=array(
	array('label'=>'List Pengumuman', 'url'=>array('index')),
	array('label'=>'Create Pengumuman', 'url'=>array('create')),
	array('label'=>'Update Pengumuman', 'url'=>array('update', 'id'=>$model->id_pengumuman)),
	array('label'=>'Delete Pengumuman', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_pengumuman),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Pengumuman', 'url'=>array('admin')),
);
?>

<h1>View Pengumuman #<?php echo $model->id_pengumuman; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_pengumuman',
		'judul',
		'isi',
		'tanggal',
		'id_user',
		'id_bidang',
		'stts',
	),
)); ?>
