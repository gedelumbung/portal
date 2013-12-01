<?php
/* @var $this Cms_bannerController */
/* @var $data Banner */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_banner')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_banner), array('view', 'id'=>$data->id_banner)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('judul')); ?>:</b>
	<?php echo CHtml::encode($data->judul); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('gambar')); ?>:</b>
	<?php echo CHtml::encode($data->gambar); ?>
	<br />


</div>