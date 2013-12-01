<?php
/* @var $this Dashboard_info_pengadaanController */
/* @var $model InfoPengadaan */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'info-pengadaan-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'kode_lelang'); ?>
		<?php echo $form->textField($model,'kode_lelang',array('size'=>30,'maxlength'=>30, "class"=>"span12")); ?>
		<?php echo $form->error($model,'kode_lelang'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nama_lelang'); ?>
		<?php echo $form->textField($model,'nama_lelang',array('size'=>60,'maxlength'=>100, "class"=>"span12")); ?>
		<?php echo $form->error($model,'nama_lelang'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'kategori'); ?>
		<?php echo $form->textField($model,'kategori',array('size'=>60,'maxlength'=>100, "class"=>"span12")); ?>
		<?php echo $form->error($model,'kategori'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'anggaran'); ?>
		<?php echo $form->textField($model,'anggaran',array('size'=>50,'maxlength'=>50, "class"=>"span12")); ?>
		<?php echo $form->error($model,'anggaran'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nilai_pagu'); ?>
		<?php echo $form->textField($model,'nilai_pagu', array("class"=>"span12")); ?>
		<?php echo $form->error($model,'nilai_pagu'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nilai_hps'); ?>
		<?php echo $form->textField($model,'nilai_hps', array("class"=>"span12")); ?>
		<?php echo $form->error($model,'nilai_hps'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'kualifikasi_usaha'); ?>
		<?php echo $form->textField($model,'kualifikasi_usaha',array('size'=>60,'maxlength'=>100, "class"=>"span12")); ?>
		<?php echo $form->error($model,'kualifikasi_usaha'); ?>
	</div>

	<div class="row">
		<?php
		$this->widget('ext.editMe.widgets.ExtEditMe', array(
		    'name'=>'InfoPengadaan[Informasi_tambahan]',
		    'value'=>$model->Informasi_tambahan,
		));
		?>
		<?php echo $form->error($model,'isi'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->