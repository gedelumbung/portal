<?php
/* @var $this Cms_admin_user_perusahaanController */
/* @var $model UserPerusahaanModel */

$this->breadcrumbs=array(
	'User Perusahaan Models'=>array('index'),
	$model->id_user,
);

$this->menu=array(
	array('label'=>'List UserPerusahaanModel', 'url'=>array('index')),
	array('label'=>'Update UserPerusahaanModel', 'url'=>array('update', 'id'=>$model->id_user)),
	array('label'=>'Delete UserPerusahaanModel', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_user),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage UserPerusahaanModel', 'url'=>array('admin')),
);
?>

<h1>View UserPerusahaanModel #<?php echo $model->id_user; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_user',
		'nama',
		'username',
		'password',
		'level',
		'email',
		'stts',
	),
)); ?>
