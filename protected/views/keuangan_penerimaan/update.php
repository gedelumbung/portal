<?php
/* @var $this Keuangan_penerimaanController */
/* @var $model PenerimaanModel */

$this->breadcrumbs=array(
	'Penerimaan Models'=>array('index'),
	$model->no_penerimaan=>array('view','id'=>$model->no_penerimaan),
	'Update',
);

$this->menu=array(
	array('label'=>'List Penerimaan', 'url'=>array('index')),
	array('label'=>'Create Penerimaan', 'url'=>array('create')),
	array('label'=>'View Penerimaan', 'url'=>array('view', 'id'=>$model->no_penerimaan)),
	array('label'=>'Manage Penerimaan', 'url'=>array('admin')),
);
?>

<h1>Update Penerimaan <?php echo $model->no_penerimaan; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>