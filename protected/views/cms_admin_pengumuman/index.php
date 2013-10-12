<?php
/* @var $this Cms_admin_pengumumanController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Pengumuman Cms',
);

$this->menu=array(
	array('label'=>'Create PengumumanCms', 'url'=>array('create')),
	array('label'=>'Manage PengumumanCms', 'url'=>array('admin')),
);
?>

<h1>Pengumuman Cms</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
