<?php
/* @var $this Cms_admin_permohonanController */
/* @var $model Permohonan */

$this->breadcrumbs=array(
	'Permohonans'=>array('index'),
	$model->id_permohonan,
);

$this->menu=array(
	array('label'=>'List Permohonan', 'url'=>array('index')),
	array('label'=>'Update Permohonan', 'url'=>array('update', 'id'=>$model->id_permohonan)),
	array('label'=>'Delete Permohonan', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_permohonan),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Permohonan', 'url'=>array('admin')),
);
?>

<h1>View Permohonan #<?php echo $model->id_permohonan; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_permohonan',
		'UserPerusahaan.nama',
		'nama_perusahaan',
		'alamat',
		'nama_file',
		'stts',
	),
)); ?>
