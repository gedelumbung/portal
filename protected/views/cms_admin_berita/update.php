<?php
/* @var $this Cms_admin_beritaController */
/* @var $model BeritaCms */

$this->breadcrumbs=array(
	'Berita Cms'=>array('index'),
	$model->id_berita=>array('view','id'=>$model->id_berita),
	'Update',
);

$this->menu=array(
	array('label'=>'List BeritaCms', 'url'=>array('index')),
	array('label'=>'View BeritaCms', 'url'=>array('view', 'id'=>$model->id_berita)),
	array('label'=>'Manage BeritaCms', 'url'=>array('admin')),
);
?>

<h1>Update BeritaCms <?php echo $model->id_berita; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>