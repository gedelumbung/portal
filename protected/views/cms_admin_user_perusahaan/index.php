<?php
/* @var $this Cms_admin_user_perusahaanController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'User Perusahaan Models',
);

$this->menu=array(
	array('label'=>'Create UserPerusahaanModel', 'url'=>array('create')),
	array('label'=>'Manage UserPerusahaanModel', 'url'=>array('admin')),
);
?>

<h1>User Perusahaan Models</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
