<?php
/* @var $this Cms_admin_profil_dinasController */
/* @var $model Profil */

$this->breadcrumbs=array(
	'Profils'=>array('index'),
	$model->id_profil,
);

$this->menu=array(
	array('label'=>'List Profil', 'url'=>array('index')),
	array('label'=>'Update Profil', 'url'=>array('update', 'id'=>$model->id_profil)),
	array('label'=>'Manage Profil', 'url'=>array('admin')),
);
?>

<h1>View Profil #<?php echo $model->id_profil; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_profil',
		array(
			'name'=>'isi',
			'type'=>'raw'),
	),
)); ?>
