<?php
/* @var $this Cms_admin_permohonanController */
/* @var $model Permohonan */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'permohonan-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>
	<div class="cleaner_h10"></div>
		<?php echo $form->labelEx($model,'nama_user'); ?>
	<div class="cleaner_h5"></div>
		<?php echo $form->hiddenField($model,'id_user'); ?>
		<?php $model->nama_user = $model->UserPerusahaan->nama; ?>
		<?php echo $form->textField($model,'nama_user',array('size'=>60,'maxlength'=>100,'readonly'=>'true')); ?>
		<?php echo $form->error($model,'nama_user'); ?>

	<div class="cleaner_h10"></div>
		<?php echo $form->labelEx($model,'nama_perusahaan'); ?>
	<div class="cleaner_h5"></div>
		<?php echo $form->textField($model,'nama_perusahaan',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'nama_perusahaan'); ?>
		
	<div class="cleaner_h10"></div>
		<?php echo $form->labelEx($model,'alamat'); ?>
	<div class="cleaner_h5"></div>
		<?php echo $form->textArea($model,'alamat',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'alamat'); ?>
		
	<div class="cleaner_h10"></div>
		<?php echo $form->labelEx($model,'nama_file'); ?>
	<div class="cleaner_h5"></div>
		<?php echo $form->textField($model,'nama_file',array('size'=>60,'maxlength'=>100,'readonly'=>'true')); ?>
		<?php echo $form->error($model,'nama_file'); ?>
		
	<div class="cleaner_h10"></div>
		<?php echo $form->labelEx($model,'stts'); ?>
	<div class="cleaner_h5"></div>
        <?php echo $form->dropDownList($model,'stts',array("Disetujui"=>"Disetujui","Belum Disetujui"=>"Belum Disetujui"),array('empty'=>'-- Pilih Status Permohonan --')); ?>
		<?php echo $form->error($model,'stts'); ?>
		
	<div class="cleaner_h10"></div>
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>

<?php $this->endWidget(); ?>

</div><!-- form -->