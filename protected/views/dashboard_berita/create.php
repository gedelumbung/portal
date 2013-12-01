<?php
/* @var $this Dashboard_beritaController */
/* @var $model Berita */

$this->breadcrumbs=array(
	'Beritas'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Berita', 'url'=>array('index')),
	array('label'=>'Manage Berita', 'url'=>array('admin')),
);
?>

<h1>Create Berita</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>