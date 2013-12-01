<?php
/* @var $this Dashboard_info_pengadaanController */
/* @var $model InfoPengadaan */

$this->breadcrumbs=array(
	'Info Pengadaans'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List InfoPengadaan', 'url'=>array('index')),
	array('label'=>'Create InfoPengadaan', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#info-pengadaan-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Info Pengadaan</h1>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'info-pengadaan-grid',
	'dataProvider'=>$model->search(),
    'pager' => array('cssFile' => Yii::app()->theme->baseUrl.'/css/gridViewAdmin.css'),
	'filter'=>$model,
	'columns'=>array(
		'kode_lelang',
		'tgl_pengumuman',
		'nama_lelang',
		'kategori',
		'anggaran',
		'stts',
		/*
		'nilai_hps',
		'kualifikasi_usaha',
		'Informasi_tambahan',
		'stts',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
