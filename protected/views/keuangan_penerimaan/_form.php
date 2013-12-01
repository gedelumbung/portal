<?php
/* @var $this Keuangan_penerimaanController */
/* @var $model PenerimaanModel */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'penerimaan-model-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'no_rekening'); ?>
		<?php echo $form->textField($model,'no_rekening',array('size'=>30,'maxlength'=>30, 'class'=>'span10')); ?>
		<?php echo $form->error($model,'no_rekening'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'uraian_rekening'); ?>
		<?php echo $form->textArea($model,'uraian_rekening',array('rows'=>6, 'cols'=>50, 'class'=>'span10')); ?>
		<?php echo $form->error($model,'uraian_rekening'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'jumlah_diterima'); ?>
		<?php echo $form->textField($model,'jumlah_diterima',array('class'=>'span10')); ?>
		<?php echo $form->error($model,'jumlah_diterima'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id_bidang'); ?>
		<?php 
		$c = new CDbCriteria();
		$c->condition = "id_bidang != '100'";
		echo CHtml::dropDownList(
			'PenerimaanModel[id_bidang]',$model->id_bidang,array(''=>'Semua') + CHtml::listData(Bidang::model()->findAll($c),'id_bidang','nama_bidang')
		); ?>
		<?php echo $form->error($model,'id_bidang'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nama_penyetor'); ?>
		<?php echo $form->textField($model,'nama_penyetor',array('size'=>60,'maxlength'=>100, 'class'=>'span10')); ?>
		<?php echo $form->error($model,'nama_penyetor'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'penerima'); ?>
		<?php echo $form->textField($model,'penerima',array('size'=>60,'maxlength'=>100, 'class'=>'span10')); ?>
		<?php echo $form->error($model,'penerima'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'memo'); ?>
		<?php echo $form->textArea($model,'memo',array('rows'=>6, 'cols'=>50, 'class'=>'span10')); ?>
		<?php echo $form->error($model,'memo'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->