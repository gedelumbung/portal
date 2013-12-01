<?php
/* @var $this Keuangan_targetController */
/* @var $data Target */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_target')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_target), array('view', 'id'=>$data->id_target)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('no_rekening')); ?>:</b>
	<?php echo CHtml::encode($data->no_rekening); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('rekening')); ?>:</b>
	<?php echo CHtml::encode($data->rekening); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('target')); ?>:</b>
	<?php echo CHtml::encode($data->target); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tahun')); ?>:</b>
	<?php echo CHtml::encode($data->tahun); ?>
	<br />


</div>