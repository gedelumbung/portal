<?php
/* @var $this Cms_admin_pengumumanController */
/* @var $model PengumumanCms */

$this->breadcrumbs=array(
	'Pengumuman Cms'=>array('index'),
	$model->id_pengumuman=>array('view','id'=>$model->id_pengumuman),
	'Update',
);

$this->menu=array(
	array('label'=>'List PengumumanCms', 'url'=>array('index')),
	array('label'=>'View PengumumanCms', 'url'=>array('view', 'id'=>$model->id_pengumuman)),
	array('label'=>'Manage PengumumanCms', 'url'=>array('admin')),
);
?>

<h1>Update PengumumanCms <?php echo $model->id_pengumuman; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>