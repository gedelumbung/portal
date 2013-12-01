<?php
/* @var $this Cms_admin_beritaController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Berita Cms',
);

$this->menu=array(
	array('label'=>'Manage BeritaCms', 'url'=>array('admin')),
);
?>

<h1>Berita Cms</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
