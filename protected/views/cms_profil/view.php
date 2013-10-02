<?php
/* @var $this Cms_profilController */
/* @var $model Profil */

$this->breadcrumbs=array(
	'Profils'=>array('index'),
	$model->id_profil,
);

$this->menu=array(
	array('label'=>'List Profil', 'url'=>array('index')),
	array('label'=>'Create Profil', 'url'=>array('create')),
	array('label'=>'Update Profil', 'url'=>array('update', 'id'=>$model->id_profil)),
	array('label'=>'Delete Profil', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_profil),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Profil', 'url'=>array('admin')),
);
?>

<h1>View Profil #<?php echo $model->id_profil; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_profil',
		'id_bidang',
		'isi',
	),
)); ?>
