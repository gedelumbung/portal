<?php
/* @var $this Dashboard_info_pengadaanController */
/* @var $model InfoPengadaan */

$this->breadcrumbs=array(
	'Info Pengadaans'=>array('index'),
	$model->id_pengadaan=>array('view','id'=>$model->id_pengadaan),
	'Update',
);

$this->menu=array(
	array('label'=>'List InfoPengadaan', 'url'=>array('index')),
	array('label'=>'Create InfoPengadaan', 'url'=>array('create')),
	array('label'=>'View InfoPengadaan', 'url'=>array('view', 'id'=>$model->id_pengadaan)),
	array('label'=>'Manage InfoPengadaan', 'url'=>array('admin')),
);
?>

<h1>Update InfoPengadaan <?php echo $model->kode_lelang; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>