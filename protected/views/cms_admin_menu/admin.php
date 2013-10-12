<?php
/* @var $this Cms_admin_menuController */
/* @var $model MenuModel */

$this->breadcrumbs=array(
	'Menu Models'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List MenuModel', 'url'=>array('index')),
	array('label'=>'Create MenuModel', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#menu-model-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Menu Models</h1>

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
	'id'=>'menu-model-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
    'pager' => array('cssFile' => Yii::app()->theme->baseUrl.'/css/gridView.css'),
	'columns'=>array(
	     array(
	      'header'=>'No',
	      'type'=>'raw',
	      'value'=>'$this->grid->dataProvider->pagination->currentPage*$this->grid->dataProvider->pagination->pageSize + $row+1'
	      ),
		'menu',
		array(
			'header'=>'Sub Menu',
			'name'=>'Menu.menu',
			'value'=>$data->Menu->menu),
		'url_route',
		'posisi',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
