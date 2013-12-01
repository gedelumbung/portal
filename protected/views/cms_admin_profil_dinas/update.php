<?php
/* @var $this Cms_admin_profil_dinasController */
/* @var $model Profil */

$this->breadcrumbs=array(
	'Profils'=>array('index'),
	$model->id_profil=>array('view','id'=>$model->id_profil),
	'Update',
);

$this->menu=array(
	array('label'=>'List Profil', 'url'=>array('index')),
	array('label'=>'View Profil', 'url'=>array('view', 'id'=>$model->id_profil)),
	array('label'=>'Manage Profil', 'url'=>array('admin')),
);
?>

<h1>Update Profil <?php echo $model->id_profil; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>