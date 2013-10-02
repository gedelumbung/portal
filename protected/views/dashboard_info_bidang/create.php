<?php
/* @var $this Dashboard_info_bidangController */
/* @var $model InfoBidang */

$this->breadcrumbs=array(
	'Info Bidangs'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List InfoBidang', 'url'=>array('index')),
	array('label'=>'Manage InfoBidang', 'url'=>array('admin')),
);
?>

<h1>Create InfoBidang</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>