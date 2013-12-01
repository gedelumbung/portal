<?php
/* @var $this Dashboard_pengumumanController */
/* @var $model Pengumuman */

$this->breadcrumbs=array(
	'Pengumumen'=>array('index'),
	$model->id_pengumuman=>array('view','id'=>$model->id_pengumuman),
	'Update',
);

$this->menu=array(
	array('label'=>'List Pengumuman', 'url'=>array('index')),
	array('label'=>'Create Pengumuman', 'url'=>array('create')),
	array('label'=>'View Pengumuman', 'url'=>array('view', 'id'=>$model->id_pengumuman)),
	array('label'=>'Manage Pengumuman', 'url'=>array('admin')),
);
?>

<h1>Update Pengumuman <?php echo $model->id_pengumuman; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>