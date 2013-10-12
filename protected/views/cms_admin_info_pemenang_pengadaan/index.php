<?php
/* @var $this Cms_admin_info_pemenang_pengadaanController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Pemenang Pengadaan Cms',
);

$this->menu=array(
	array('label'=>'Create PemenangPengadaanCms', 'url'=>array('create')),
	array('label'=>'Manage PemenangPengadaanCms', 'url'=>array('admin')),
);
?>

<h1>Pemenang Pengadaan Cms</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
