<?php
/* @var $this Keuangan_penerimaanController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Penerimaan Models',
);

$this->menu=array(
	array('label'=>'Create Penerimaan', 'url'=>array('create')),
	array('label'=>'Manage Penerimaan', 'url'=>array('admin')),
);
?>

<h1>Penerimaan</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
