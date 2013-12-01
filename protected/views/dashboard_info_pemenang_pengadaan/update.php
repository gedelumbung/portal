<?php
/* @var $this Dashboard_info_pemenang_pengadaanController */
/* @var $model PemenangPengadaan */

$this->breadcrumbs=array(
	'Pemenang Pengadaans'=>array('index'),
	$model->id_pemenang_pengadaan=>array('view','id'=>$model->id_pemenang_pengadaan),
	'Update',
);

$this->menu=array(
	array('label'=>'List PemenangPengadaan', 'url'=>array('index')),
	array('label'=>'Create PemenangPengadaan', 'url'=>array('create')),
	array('label'=>'View PemenangPengadaan', 'url'=>array('view', 'id'=>$model->id_pemenang_pengadaan)),
	array('label'=>'Manage PemenangPengadaan', 'url'=>array('admin')),
);
?>

<h1>Update PemenangPengadaan <?php echo $model->id_pemenang_pengadaan; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>