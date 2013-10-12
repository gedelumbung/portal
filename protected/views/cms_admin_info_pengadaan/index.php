<?php
/* @var $this Cms_admin_info_pengadaanController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Pengadaan Cms',
);

$this->menu=array(
	array('label'=>'Create PengadaanCms', 'url'=>array('create')),
	array('label'=>'Manage PengadaanCms', 'url'=>array('admin')),
);
?>

<h1>Pengadaan Cms</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
