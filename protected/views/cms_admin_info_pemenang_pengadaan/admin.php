<?php
/* @var $this Cms_admin_info_pemenang_pengadaanController */
/* @var $model PemenangPengadaanCms */

$this->breadcrumbs=array(
	'Pemenang Pengadaan Cms'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Pemenang Pengadaan', 'url'=>array('index')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#pemenang-pengadaan-cms-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Pemenang Pengadaan Cms</h1>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'pemenang-pengadaan-cms-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
    'pager' => array('cssFile' => Yii::app()->theme->baseUrl.'/css/gridViewAdmin.css'),
	'columns'=>array(
		'no_reff',
		'tgl_pengumuman',
		'kode_lelang',
		'nama_pemenang_1',
		'nilai_penawaran_1',
		/*
		'stts',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
