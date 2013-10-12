<?php
/* @var $this Cms_admin_bidangController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Bidangs',
);

$this->menu=array(
	array('label'=>'Create Bidang', 'url'=>array('create')),
	array('label'=>'Manage Bidang', 'url'=>array('admin')),
);
?>

<h1>Bidangs</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
