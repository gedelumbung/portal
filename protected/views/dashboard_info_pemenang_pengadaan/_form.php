<?php
/* @var $this Dashboard_info_pemenang_pengadaanController */
/* @var $model PemenangPengadaan */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'pemenang-pengadaan-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'no_reff'); ?>
		<?php echo $form->textField($model,'no_reff',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'no_reff'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'kode_lelang'); ?>
		<?php echo CHtml::dropDownList(
			'PemenangPengadaan[kode_lelang]',$model->kode_lelang,array(''=>'Pilih') + CHtml::listData(InfoPengadaan::model()->findAll(),'id_pengadaan','kode_lelang')
		); ?>
		<?php echo $form->error($model,'kode_lelang'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nama_pemenang_1'); ?>
		<?php echo $form->textField($model,'nama_pemenang_1',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'nama_pemenang_1'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nilai_penawaran_1'); ?>
		<?php echo $form->textField($model,'nilai_penawaran_1',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'nilai_penawaran_1'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'npwp_1'); ?>
		<?php echo $form->textField($model,'npwp_1',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'npwp_1'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nama_pemenang_2'); ?>
		<?php echo $form->textField($model,'nama_pemenang_2',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'nama_pemenang_2'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nilai_penawaran_2'); ?>
		<?php echo $form->textField($model,'nilai_penawaran_2',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'nilai_penawaran_2'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'npwp_2'); ?>
		<?php echo $form->textField($model,'npwp_2',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'npwp_2'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nama_pemenang_3'); ?>
		<?php echo $form->textField($model,'nama_pemenang_3',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'nama_pemenang_3'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nilai_penawaran_3'); ?>
		<?php echo $form->textField($model,'nilai_penawaran_3',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'nilai_penawaran_3'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'npwp_3'); ?>
		<?php echo $form->textField($model,'npwp_3',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'npwp_3'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->