<?php
/* @var $this Keuangan_penerimaanController */
/* @var $data PenerimaanModel */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('no_penerimaan')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->no_penerimaan), array('view', 'id'=>$data->no_penerimaan)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tanggal')); ?>:</b>
	<?php echo CHtml::encode($data->tanggal); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('jam')); ?>:</b>
	<?php echo CHtml::encode($data->jam); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('no_rekening')); ?>:</b>
	<?php echo CHtml::encode($data->no_rekening); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('uraian_rekening')); ?>:</b>
	<?php echo CHtml::encode($data->uraian_rekening); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('jumlah_diterima')); ?>:</b>
	<?php echo CHtml::encode($data->jumlah_diterima); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_bidang')); ?>:</b>
	<?php echo CHtml::encode($data->id_bidang); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('nama_penyetor')); ?>:</b>
	<?php echo CHtml::encode($data->nama_penyetor); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('penerima')); ?>:</b>
	<?php echo CHtml::encode($data->penerima); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('memo')); ?>:</b>
	<?php echo CHtml::encode($data->memo); ?>
	<br />

	*/ ?>

</div>