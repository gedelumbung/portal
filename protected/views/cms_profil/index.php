<?php
/* @var $this Cms_profilController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Profils',
);

$this->menu=array(
	array('label'=>'Create Profil', 'url'=>array('create')),
	array('label'=>'Manage Profil', 'url'=>array('admin')),
);
?>

<h1>Profils</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
