<?php
/* @var $this Dashboard_pengumumanController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Pengumumen',
);

$this->menu=array(
	array('label'=>'Create Pengumuman', 'url'=>array('create')),
	array('label'=>'Manage Pengumuman', 'url'=>array('admin')),
);
?>

<h1>Pengumumen</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
