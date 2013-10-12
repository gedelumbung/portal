<?php
/* @var $this Cms_admin_menuController */
/* @var $model MenuModel */

$this->breadcrumbs=array(
	'Menu Models'=>array('index'),
	$model->id_menu,
);

$this->menu=array(
	array('label'=>'List MenuModel', 'url'=>array('index')),
	array('label'=>'Create MenuModel', 'url'=>array('create')),
	array('label'=>'Update MenuModel', 'url'=>array('update', 'id'=>$model->id_menu)),
	array('label'=>'Delete MenuModel', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_menu),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage MenuModel', 'url'=>array('admin')),
);
?>

<h1>View MenuModel #<?php echo $model->id_menu; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_menu',
		'id_parent',
		'menu',
		'url_route',
		'content',
		'posisi',
	),
)); ?>
