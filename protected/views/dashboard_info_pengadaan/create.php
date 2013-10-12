<?php
/* @var $this Dashboard_info_pengadaanController */
/* @var $model InfoPengadaan */

$this->breadcrumbs=array(
	'Info Pengadaans'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List InfoPengadaan', 'url'=>array('index')),
	array('label'=>'Manage InfoPengadaan', 'url'=>array('admin')),
);
?>

<h1>Create Info Pengadaan</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>