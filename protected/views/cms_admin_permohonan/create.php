<?php
/* @var $this Cms_admin_permohonanController */
/* @var $model Permohonan */

$this->breadcrumbs=array(
	'Permohonans'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Permohonan', 'url'=>array('index')),
	array('label'=>'Manage Permohonan', 'url'=>array('admin')),
);
?>

<h1>Create Permohonan</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>