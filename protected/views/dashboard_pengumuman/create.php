<?php
/* @var $this Dashboard_pengumumanController */
/* @var $model Pengumuman */

$this->breadcrumbs=array(
	'Pengumumen'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Pengumuman', 'url'=>array('index')),
	array('label'=>'Manage Pengumuman', 'url'=>array('admin')),
);
?>

<h1>Create Pengumuman</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>