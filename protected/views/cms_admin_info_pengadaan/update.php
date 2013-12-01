<?php
/* @var $this Cms_admin_info_pengadaanController */
/* @var $model PengadaanCms */

$this->breadcrumbs=array(
	'Pengadaan Cms'=>array('index'),
	$model->id_pengadaan=>array('view','id'=>$model->id_pengadaan),
	'Update',
);

$this->menu=array(
	array('label'=>'List PengadaanCms', 'url'=>array('index')),
	array('label'=>'View PengadaanCms', 'url'=>array('view', 'id'=>$model->id_pengadaan)),
	array('label'=>'Manage PengadaanCms', 'url'=>array('admin')),
);
?>

<h1>Update PengadaanCms <?php echo $model->id_pengadaan; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>