<?php
/* @var $this Dashboard_info_pemenang_pengadaanController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Pemenang Pengadaans',
);

$this->menu=array(
	array('label'=>'Create PemenangPengadaan', 'url'=>array('create')),
	array('label'=>'Manage PemenangPengadaan', 'url'=>array('admin')),
);
?>

<h1>Pemenang Pengadaans</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
