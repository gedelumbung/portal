<?php
/* @var $this Cms_profilController */
/* @var $data Profil */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_profil')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_profil), array('view', 'id'=>$data->id_profil)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_bidang')); ?>:</b>
	<?php echo CHtml::encode($data->id_bidang); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('isi')); ?>:</b>
	<?php echo CHtml::encode($data->isi); ?>
	<br />


</div>