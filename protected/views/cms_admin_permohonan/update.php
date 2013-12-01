<?php
/* @var $this Cms_admin_permohonanController */
/* @var $model Permohonan */

$this->breadcrumbs=array(
	'Permohonans'=>array('index'),
	$model->id_permohonan=>array('view','id'=>$model->id_permohonan),
	'Update',
);

$this->menu=array(
	array('label'=>'List Permohonan', 'url'=>array('index')),
	array('label'=>'View Permohonan', 'url'=>array('view', 'id'=>$model->id_permohonan)),
	array('label'=>'Manage Permohonan', 'url'=>array('admin')),
);
?>

<h1>Update Permohonan <?php echo $model->id_permohonan; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>