<?php
/* @var $this Dashboard_pengumumanController */
/* @var $model Pengumuman */

$this->breadcrumbs=array(
	'Pengumumen'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Pengumuman', 'url'=>array('index')),
	array('label'=>'Create Pengumuman', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#pengumuman-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Pengumuman</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'pengumuman-grid',
	'dataProvider'=>$model->search(),
	'filter' => $model,
    'pager' => array('cssFile' => Yii::app()->theme->baseUrl.'/css/gridView.css'),
	'columns'=>array(
	     array(
	      'header'=>'No',
	      'type'=>'raw',
	      'value'=>'$this->grid->dataProvider->pagination->currentPage*$this->grid->dataProvider->pagination->pageSize + $row+1'
	      ),
		'judul',
		'tanggal',
		'Bidang.nama_bidang',
		/*
		'stts',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
