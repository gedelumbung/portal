<?php
/* @var $this Cms_admin_permohonanController */
/* @var $data Permohonan */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_permohonan')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_permohonan), array('view', 'id'=>$data->id_permohonan)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_user')); ?>:</b>
	<?php echo CHtml::encode($data->id_user); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nama_perusahaan')); ?>:</b>
	<?php echo CHtml::encode($data->nama_perusahaan); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('alamat')); ?>:</b>
	<?php echo CHtml::encode($data->alamat); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nama_file')); ?>:</b>
	<?php echo CHtml::encode($data->nama_file); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('stts')); ?>:</b>
	<?php echo CHtml::encode($data->stts); ?>
	<br />


</div>