<?php
/* @var $this Dashboard_info_bidangController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Info Bidangs',
);

$this->menu=array(
	array('label'=>'Create InfoBidang', 'url'=>array('create')),
	array('label'=>'Manage InfoBidang', 'url'=>array('admin')),
);
?>

<h1>Info Bidangs</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
