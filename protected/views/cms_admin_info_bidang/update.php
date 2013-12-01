<?php
/* @var $this Cms_admin_info_bidangController */
/* @var $model InfoBidangCms */

$this->breadcrumbs=array(
	'Info Bidang Cms'=>array('index'),
	$model->id_info=>array('view','id'=>$model->id_info),
	'Update',
);

$this->menu=array(
	array('label'=>'List InfoBidangCms', 'url'=>array('index')),
	array('label'=>'View InfoBidangCms', 'url'=>array('view', 'id'=>$model->id_info)),
	array('label'=>'Manage InfoBidangCms', 'url'=>array('admin')),
);
?>

<h1>Update InfoBidangCms <?php echo $model->id_info; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>