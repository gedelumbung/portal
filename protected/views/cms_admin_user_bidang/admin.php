<?php
/* @var $this Cms_admin_user_bidangController */
/* @var $model UserBidang */

$this->breadcrumbs=array(
	'User Bidangs'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List UserBidang', 'url'=>array('index')),
	array('label'=>'Create UserBidang', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#user-bidang-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage User Bidang</h1>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'user-bidang-grid',
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
		'nama',
		'username',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
