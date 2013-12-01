<?php
/* @var $this Cms_admin_bidangController */
/* @var $data Bidang */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_bidang')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_bidang), array('view', 'id'=>$data->id_bidang)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nama_bidang')); ?>:</b>
	<?php echo CHtml::encode($data->nama_bidang); ?>
	<br />


</div>