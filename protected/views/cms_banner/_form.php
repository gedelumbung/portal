<?php
/* @var $this Cms_bannerController */
/* @var $model Banner */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'banner-form',
	'enableAjaxValidation'=>false,
	'htmlOptions' => array('class'=>'mainForm',
        'enctype' => 'multipart/form-data',),
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'judul'); ?>
		<?php echo $form->textField($model,'judul',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'judul'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'gambar'); ?>
		<?php echo $form->fileField($model,'gambar',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'gambar'); ?>
		*ukuran gambar 583 x 280
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->