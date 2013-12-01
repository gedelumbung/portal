<?php
/* @var $this Dashboard_info_pemenang_pengadaanController */
/* @var $model PemenangPengadaan */

$this->breadcrumbs=array(
	'Pemenang Pengadaans'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List PemenangPengadaan', 'url'=>array('index')),
	array('label'=>'Manage PemenangPengadaan', 'url'=>array('admin')),
);
?>

<h1>Create PemenangPengadaan</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>