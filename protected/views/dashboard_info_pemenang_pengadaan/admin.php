<?php
/* @var $this Dashboard_info_pemenang_pengadaanController */
/* @var $model PemenangPengadaan */

$this->breadcrumbs=array(
	'Pemenang Pengadaans'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List PemenangPengadaan', 'url'=>array('index')),
	array('label'=>'Create PemenangPengadaan', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#pemenang-pengadaan-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Pemenang Pengadaan</h1>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'pemenang-pengadaan-grid',
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
		'npwp_1',
		'nama_pemenang_2',
		'nilai_penawaran_2',
		'npwp_2',
		'nama_pemenang_3',
		'nilai_penawaran_3',
		'npwp_3',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
