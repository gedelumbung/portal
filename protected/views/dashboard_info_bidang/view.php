<?php
/* @var $this Dashboard_info_bidangController */
/* @var $model InfoBidang */

$this->breadcrumbs=array(
	'Info Bidangs'=>array('index'),
	$model->id_info,
);

$this->menu=array(
	array('label'=>'List InfoBidang', 'url'=>array('index')),
	array('label'=>'Create InfoBidang', 'url'=>array('create')),
	array('label'=>'Update InfoBidang', 'url'=>array('update', 'id'=>$model->id_info)),
	array('label'=>'Delete InfoBidang', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_info),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage InfoBidang', 'url'=>array('admin')),
);
?>

<h1>View InfoBidang #<?php echo $model->id_info; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_info',
		'judul',
		'isi',
		'tanggal',
		'id_user',
		'id_bidang',
		'stts',
	),
)); ?>
