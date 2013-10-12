<?php
/* @var $this Cms_admin_info_bidangController */
/* @var $data InfoBidangCms */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_info')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_info), array('view', 'id'=>$data->id_info)); ?>
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