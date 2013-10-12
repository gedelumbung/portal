<?php
/* @var $this Cms_admin_info_bidangController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Info Bidang Cms',
);

$this->menu=array(
	array('label'=>'Create InfoBidangCms', 'url'=>array('create')),
	array('label'=>'Manage InfoBidangCms', 'url'=>array('admin')),
);
?>

<h1>Info Bidang Cms</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
