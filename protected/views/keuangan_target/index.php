<?php
/* @var $this Keuangan_targetController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Targets',
);

$this->menu=array(
	array('label'=>'Create Target', 'url'=>array('create')),
	array('label'=>'Manage Target', 'url'=>array('admin')),
);
?>

<h1>Targets</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
