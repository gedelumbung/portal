<?php
/* @var $this Cms_admin_beritaController */
/* @var $model BeritaCms */

$this->breadcrumbs=array(
	'Berita Cms'=>array('index'),
	$model->id_berita,
);

$this->menu=array(
	array('label'=>'List BeritaCms', 'url'=>array('index')),
	array('label'=>'Update BeritaCms', 'url'=>array('update', 'id'=>$model->id_berita)),
	array('label'=>'Delete BeritaCms', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_berita),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage BeritaCms', 'url'=>array('admin')),
);
?>

<h1>View BeritaCms #<?php echo $model->id_berita; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_berita',
		'judul',
		array(
			"type"=>"raw",
			"name"=>"isi",
			"data"=>$model->isi),
		'tanggal',
		'UserBidang.nama',
		'Bidang.nama_bidang',
		'stts',
	),
)); ?>
