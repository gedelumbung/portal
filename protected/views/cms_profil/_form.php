<?php
/* @var $this Cms_profilController */
/* @var $model Profil */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'profil-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'id_bidang'); ?>
		<?php echo $form->textField($model,'id_bidang'); ?>
		<?php echo $form->error($model,'id_bidang'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'isi'); ?>
		<?php echo $form->textArea($model,'isi',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'isi'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->