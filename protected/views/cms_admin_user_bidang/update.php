<?php
/* @var $this Cms_admin_user_bidangController */
/* @var $model UserBidang */

$this->breadcrumbs=array(
	'User Bidangs'=>array('index'),
	$model->id_user=>array('view','id'=>$model->id_user),
	'Update',
);

$this->menu=array(
	array('label'=>'List UserBidang', 'url'=>array('index')),
	array('label'=>'Create UserBidang', 'url'=>array('create')),
	array('label'=>'View UserBidang', 'url'=>array('view', 'id'=>$model->id_user)),
	array('label'=>'Manage UserBidang', 'url'=>array('admin')),
);
?>

<h1>Update UserBidang <?php echo $model->id_user; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>