<?php
/* @var $this Keuangan_penerimaanController */
/* @var $model PenerimaanModel */

$this->breadcrumbs=array(
	'Penerimaan Models'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Penerimaan', 'url'=>array('index')),
	array('label'=>'Manage Penerimaan', 'url'=>array('admin')),
);
?>

<h1>Create Penerimaan</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>