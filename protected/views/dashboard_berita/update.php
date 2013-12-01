<?php
/* @var $this Dashboard_beritaController */
/* @var $model Berita */

$this->breadcrumbs=array(
	'Beritas'=>array('index'),
	$model->id_berita=>array('view','id'=>$model->id_berita),
	'Update',
);

$this->menu=array(
	array('label'=>'List Berita', 'url'=>array('index')),
	array('label'=>'Create Berita', 'url'=>array('create')),
	array('label'=>'View Berita', 'url'=>array('view', 'id'=>$model->id_berita)),
	array('label'=>'Manage Berita', 'url'=>array('admin')),
);
?>

<h1>Update Berita <?php echo $model->id_berita; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>