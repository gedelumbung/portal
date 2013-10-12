<?php
/* @var $this Cms_admin_menuController */
/* @var $model MenuModel */

$this->breadcrumbs=array(
	'Menu Models'=>array('index'),
	$model->id_menu=>array('view','id'=>$model->id_menu),
	'Update',
);

$this->menu=array(
	array('label'=>'List MenuModel', 'url'=>array('index')),
	array('label'=>'Create MenuModel', 'url'=>array('create')),
	array('label'=>'View MenuModel', 'url'=>array('view', 'id'=>$model->id_menu)),
	array('label'=>'Manage MenuModel', 'url'=>array('admin')),
);
?>

<h1>Update MenuModel <?php echo $model->id_menu; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>