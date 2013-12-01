<?php
/* @var $this Keuangan_penerimaanController */
/* @var $model PenerimaanModel */

$this->breadcrumbs=array(
	'Penerimaan'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Penerimaan', 'url'=>array('index')),
	array('label'=>'Create Penerimaan', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#penerimaan-model-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Penerimaan</h1>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'penerimaan-model-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'no_penerimaan',
		'tanggal',
		'jam',
		'no_rekening',
		'uraian_rekening',
		'jumlah_diterima',
		/*
		'id_bidang',
		'nama_penyetor',
		'penerima',
		'memo',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
