<?php
/* @var $this Dashboard_info_bidangController */
/* @var $model InfoBidang */

$this->breadcrumbs=array(
	'Info Bidangs'=>array('index'),
	$model->id_info=>array('view','id'=>$model->id_info),
	'Update',
);

$this->menu=array(
	array('label'=>'List InfoBidang', 'url'=>array('index')),
	array('label'=>'Create InfoBidang', 'url'=>array('create')),
	array('label'=>'View InfoBidang', 'url'=>array('view', 'id'=>$model->id_info)),
	array('label'=>'Manage InfoBidang', 'url'=>array('admin')),
);
?>

<h1>Update InfoBidang <?php echo $model->id_info; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>