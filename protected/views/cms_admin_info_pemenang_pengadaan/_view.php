<?php
/* @var $this Cms_admin_info_pemenang_pengadaanController */
/* @var $data PemenangPengadaanCms */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_pemenang_pengadaan')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_pemenang_pengadaan), array('view', 'id'=>$data->id_pemenang_pengadaan)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('judul')); ?>:</b>
	<?php echo CHtml::encode($data->judul); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('isi')); ?>:</b>
	<?php echo CHtml::encode($data->isi); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tanggal')); ?>:</b>
	<?php echo CHtml::encode($data->tanggal); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_user')); ?>:</b>
	<?php echo CHtml::encode($data->id_user); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_bidang')); ?>:</b>
	<?php echo CHtml::encode($data->id_bidang); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('stts')); ?>:</b>
	<?php echo CHtml::encode($data->stts); ?>
	<br />


</div>