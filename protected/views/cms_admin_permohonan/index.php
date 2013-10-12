<?php
/* @var $this Cms_admin_permohonanController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Permohonans',
);

$this->menu=array(
	array('label'=>'Create Permohonan', 'url'=>array('create')),
	array('label'=>'Manage Permohonan', 'url'=>array('admin')),
);
?>

<h1>Permohonans</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
