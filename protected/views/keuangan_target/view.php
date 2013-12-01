<?php
/* @var $this Keuangan_targetController */
/* @var $model Target */

$this->breadcrumbs=array(
	'Targets'=>array('index'),
	$model->id_target,
);

$this->menu=array(
	array('label'=>'List Target', 'url'=>array('index')),
	array('label'=>'Create Target', 'url'=>array('create')),
	array('label'=>'Update Target', 'url'=>array('update', 'id'=>$model->id_target)),
	array('label'=>'Delete Target', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_target),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Target', 'url'=>array('admin')),
);
?>

<h1>View Target #<?php echo $model->id_target; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_target',
		'no_rekening',
		'rekening',
		'target',
		'tahun',
	),
)); ?>
