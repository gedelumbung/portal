<?php
/* @var $this Dashboard_info_pemenang_pengadaanController */
/* @var $data PemenangPengadaan */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_pemenang_pengadaan')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_pemenang_pengadaan), array('view', 'id'=>$data->id_pemenang_pengadaan)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('no_reff')); ?>:</b>
	<?php echo CHtml::encode($data->no_reff); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tgl_pengumuman')); ?>:</b>
	<?php echo CHtml::encode($data->tgl_pengumuman); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('kode_lelang')); ?>:</b>
	<?php echo CHtml::encode($data->kode_lelang); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nama_pemenang_1')); ?>:</b>
	<?php echo CHtml::encode($data->nama_pemenang_1); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nilai_penawaran_1')); ?>:</b>
	<?php echo CHtml::encode($data->nilai_penawaran_1); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('npwp_1')); ?>:</b>
	<?php echo CHtml::encode($data->npwp_1); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('nama_pemenang_2')); ?>:</b>
	<?php echo CHtml::encode($data->nama_pemenang_2); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nilai_penawaran_2')); ?>:</b>
	<?php echo CHtml::encode($data->nilai_penawaran_2); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('npwp_2')); ?>:</b>
	<?php echo CHtml::encode($data->npwp_2); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nama_pemenang_3')); ?>:</b>
	<?php echo CHtml::encode($data->nama_pemenang_3); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nilai_penawaran_3')); ?>:</b>
	<?php echo CHtml::encode($data->nilai_penawaran_3); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('npwp_3')); ?>:</b>
	<?php echo CHtml::encode($data->npwp_3); ?>
	<br />

	*/ ?>

</div>