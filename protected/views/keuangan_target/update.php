<?php
/* @var $this Keuangan_targetController */
/* @var $model Target */

$this->breadcrumbs=array(
	'Targets'=>array('index'),
	$model->id_target=>array('view','id'=>$model->id_target),
	'Update',
);

$this->menu=array(
	array('label'=>'List Target', 'url'=>array('index')),
	array('label'=>'Create Target', 'url'=>array('create')),
	array('label'=>'View Target', 'url'=>array('view', 'id'=>$model->id_target)),
	array('label'=>'Manage Target', 'url'=>array('admin')),
);
?>

<h1>Update Target <?php echo $model->id_target; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>