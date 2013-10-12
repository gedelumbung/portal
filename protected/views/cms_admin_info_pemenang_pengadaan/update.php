<?php
/* @var $this Cms_admin_info_pemenang_pengadaanController */
/* @var $model PemenangPengadaanCms */

$this->breadcrumbs=array(
	'Pemenang Pengadaan Cms'=>array('index'),
	$model->id_pemenang_pengadaan=>array('view','id'=>$model->id_pemenang_pengadaan),
	'Update',
);

$this->menu=array(
	array('label'=>'List PemenangPengadaanCms', 'url'=>array('index')),
	array('label'=>'View PemenangPengadaanCms', 'url'=>array('view', 'id'=>$model->id_pemenang_pengadaan)),
	array('label'=>'Manage PemenangPengadaanCms', 'url'=>array('admin')),
);
?>

<h1>Update PemenangPengadaanCms <?php echo $model->id_pemenang_pengadaan; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>