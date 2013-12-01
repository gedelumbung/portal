<?php
/* @var $this Keuangan_penerimaanController */
/* @var $model PenerimaanModel */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'no_penerimaan'); ?>
		<?php echo $form->textField($model,'no_penerimaan'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tanggal'); ?>
		<?php echo $form->textField($model,'tanggal',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'jam'); ?>
		<?php echo $form->textField($model,'jam',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'no_rekening'); ?>
		<?php echo $form->textField($model,'no_rekening',array('size'=>30,'maxlength'=>30)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'uraian_rekening'); ?>
		<?php echo $form->textArea($model,'uraian_rekening',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'jumlah_diterima'); ?>
		<?php echo $form->textField($model,'jumlah_diterima'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_bidang'); ?>
		<?php echo $form->textField($model,'id_bidang'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nama_penyetor'); ?>
		<?php echo $form->textField($model,'nama_penyetor',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'penerima'); ?>
		<?php echo $form->textField($model,'penerima',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'memo'); ?>
		<?php echo $form->textArea($model,'memo',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->