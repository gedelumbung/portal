<?php
/* @var $this Cms_admin_bidangController */
/* @var $model Bidang */

$this->breadcrumbs=array(
	'Bidangs'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Bidang', 'url'=>array('index')),
	array('label'=>'Manage Bidang', 'url'=>array('admin')),
);
?>

<h1>Create Bidang</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>