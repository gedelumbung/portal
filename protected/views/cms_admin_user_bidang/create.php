<?php
/* @var $this Cms_admin_user_bidangController */
/* @var $model UserBidang */

$this->breadcrumbs=array(
	'User Bidangs'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List UserBidang', 'url'=>array('index')),
	array('label'=>'Manage UserBidang', 'url'=>array('admin')),
);
?>

<h1>Create UserBidang</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>