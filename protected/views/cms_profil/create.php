<?php
/* @var $this Cms_profilController */
/* @var $model Profil */

$this->breadcrumbs=array(
	'Profils'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Profil', 'url'=>array('index')),
	array('label'=>'Manage Profil', 'url'=>array('admin')),
);
?>

<h1>Create Profil</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>