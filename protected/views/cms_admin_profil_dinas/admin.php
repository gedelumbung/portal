<?php
/* @var $this Cms_admin_profil_dinasController */
/* @var $model Profil */

$this->breadcrumbs=array(
	'Profils'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Profil', 'url'=>array('index')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#profil-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Profil Dinas</h1>

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'profil-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
    'pager' => array('cssFile' => Yii::app()->theme->baseUrl.'/css/gridViewAdmin.css'),
	'columns'=>array(
	     array(
	      'header'=>'No',
	      'type'=>'raw',
	      'value'=>'$this->grid->dataProvider->pagination->currentPage*$this->grid->dataProvider->pagination->pageSize + $row+1'
	      ),
		'Bidang.nama_bidang',
			array(
				'class'=>'CButtonColumn',
				'template'=>'{view}{update}',
		),
	),
)); ?>
