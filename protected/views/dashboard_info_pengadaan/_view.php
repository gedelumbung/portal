<?php
/* @var $this Dashboard_info_pengadaanController */
/* @var $data InfoPengadaan */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('kode_lelang')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->kode_lelang), array('view', 'id'=>$data->kode_lelang)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tgl_pengumuman')); ?>:</b>
	<?php echo CHtml::encode($data->tgl_pengumuman); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nama_lelang')); ?>:</b>
	<?php echo CHtml::encode($data->nama_lelang); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('kategori')); ?>:</b>
	<?php echo CHtml::encode($data->kategori); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('anggaran')); ?>:</b>
	<?php echo CHtml::encode($data->anggaran); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nilai_pagu')); ?>:</b>
	<?php echo CHtml::encode($data->nilai_pagu); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nilai_hps')); ?>:</b>
	<?php echo CHtml::encode($data->nilai_hps); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('kualifikasi_usaha')); ?>:</b>
	<?php echo CHtml::encode($data->kualifikasi_usaha); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Informasi_tambahan')); ?>:</b>
	<?php echo CHtml::encode($data->Informasi_tambahan); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('stts')); ?>:</b>
	<?php echo CHtml::encode($data->stts); ?>
	<br />

	*/ ?>

</div>