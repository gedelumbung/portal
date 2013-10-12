<?php
/* @var $this Cms_admin_bidangController */
/* @var $model Bidang */

$this->breadcrumbs=array(
	'Bidangs'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Bidang', 'url'=>array('index')),
	array('label'=>'Create Bidang', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#bidang-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Bidang</h1>

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
	'id'=>'bidang-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
    'pager' => array('cssFile' => Yii::app()->theme->baseUrl.'/css/gridView.css'),
	'columns'=>array(
	     array(
	      'header'=>'No',
	      'type'=>'raw',
	      'value'=>'$this->grid->dataProvider->pagination->currentPage*$this->grid->dataProvider->pagination->pageSize + $row+1'
	      ),
		'nama_bidang',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
