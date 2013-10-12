<?php
/* @var $this Dashboard_info_pengadaanController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Info Pengadaans',
);

$this->menu=array(
	array('label'=>'Create InfoPengadaan', 'url'=>array('create')),
	array('label'=>'Manage InfoPengadaan', 'url'=>array('admin')),
);
?>

<h1>Info Pengadaans</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
