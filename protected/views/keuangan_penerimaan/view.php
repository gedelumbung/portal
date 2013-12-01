<?php
/* @var $this Keuangan_penerimaanController */
/* @var $model PenerimaanModel */

$this->breadcrumbs=array(
	'Penerimaan Models'=>array('index'),
	$model->no_penerimaan,
);

$this->menu=array(
	array('label'=>'List Penerimaan', 'url'=>array('index')),
	array('label'=>'Create Penerimaan', 'url'=>array('create')),
	array('label'=>'Update Penerimaan', 'url'=>array('update', 'id'=>$model->no_penerimaan)),
	array('label'=>'Delete Penerimaan', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->no_penerimaan),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Penerimaan', 'url'=>array('admin')),
);
?>

<h1>View Penerimaan #<?php echo $model->no_penerimaan; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'no_penerimaan',
		'tanggal',
		'jam',
		'no_rekening',
		'uraian_rekening',
		'jumlah_diterima',
		array(
			'label'=>'Bidang',
			'value'=>$model->Bidang->nama_bidang,
			),
		'nama_penyetor',
		'penerima',
		'memo',
	),
)); ?>
