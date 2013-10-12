<?php
/* @var $this Cms_admin_menuController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Menu Models',
);

$this->menu=array(
	array('label'=>'Create MenuModel', 'url'=>array('create')),
	array('label'=>'Manage MenuModel', 'url'=>array('admin')),
);
?>

<h1>Menu Models</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
