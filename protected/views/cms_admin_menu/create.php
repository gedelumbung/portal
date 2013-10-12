<?php
/* @var $this Cms_admin_menuController */
/* @var $model MenuModel */

$this->breadcrumbs=array(
	'Menu Models'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List MenuModel', 'url'=>array('index')),
	array('label'=>'Manage MenuModel', 'url'=>array('admin')),
);
?>

<h1>Create MenuModel</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>