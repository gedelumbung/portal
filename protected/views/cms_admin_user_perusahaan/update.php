<?php
/* @var $this Cms_admin_user_perusahaanController */
/* @var $model UserPerusahaanModel */

$this->breadcrumbs=array(
	'User Perusahaan Models'=>array('index'),
	$model->id_user=>array('view','id'=>$model->id_user),
	'Update',
);

$this->menu=array(
	array('label'=>'List UserPerusahaanModel', 'url'=>array('index')),
	array('label'=>'View UserPerusahaanModel', 'url'=>array('view', 'id'=>$model->id_user)),
	array('label'=>'Manage UserPerusahaanModel', 'url'=>array('admin')),
);
?>

<h1>Update UserPerusahaanModel <?php echo $model->id_user; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>