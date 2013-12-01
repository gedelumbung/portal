<?php
/* @var $this Cms_admin_user_bidangController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'User Bidangs',
);

$this->menu=array(
	array('label'=>'Create UserBidang', 'url'=>array('create')),
	array('label'=>'Manage UserBidang', 'url'=>array('admin')),
);
?>

<h1>User Bidangs</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
