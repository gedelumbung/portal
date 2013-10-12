<?php
/* @var $this Cms_admin_user_perusahaanController */
/* @var $model UserPerusahaanModel */

$this->breadcrumbs=array(
	'User Perusahaan Models'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List UserPerusahaanModel', 'url'=>array('index')),
	array('label'=>'Manage UserPerusahaanModel', 'url'=>array('admin')),
);
?>

<h1>Create UserPerusahaanModel</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>