<?php
/* @var $this Cms_admin_user_perusahaanController */
/* @var $model UserPerusahaanModel */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'user-perusahaan-model-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>
	 <?php echo Yii::app()->user->getFlash('result'); ?>

	<div class="cleaner_h10"></div>
		<?php echo $form->labelEx($model,'nama'); ?>
		<div class="cleaner_h5"></div>
		<?php echo $form->textField($model,'nama',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'nama'); ?>

	<div class="cleaner_h10"></div>
		<?php echo $form->labelEx($model,'username'); ?>
		<div class="cleaner_h5"></div>
		<?php echo $form->textField($model,'username',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'username'); ?>

	<div class="cleaner_h10"></div>
		<?php echo $form->labelEx($model,'password'); ?>
		<div class="cleaner_h5"></div>
		<?php $model->password = ""; ?>
		<?php echo $form->passwordField($model,'password',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'password'); ?>

	<div class="cleaner_h10"></div>
		<?php echo $form->labelEx($model,'level'); ?>
		<div class="cleaner_h5"></div>
		<?php echo $form->textField($model,'level',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'level'); ?>

	<div class="cleaner_h10"></div>
		<?php echo $form->labelEx($model,'email'); ?>
		<div class="cleaner_h5"></div>
		<?php echo $form->textField($model,'email',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'email'); ?>

	<div class="cleaner_h10"></div>
		<?php echo $form->labelEx($model,'stts'); ?>
		<div class="cleaner_h5"></div>
        <?php echo $form->dropDownList($model,'stts',array("1"=>"aktif","0"=>"non aktif"),array('empty'=>'-- status keaktifan --')); ?>
		<?php echo $form->error($model,'stts'); ?>

	<div class="cleaner_h10"></div>
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>

<?php $this->endWidget(); ?>

</div><!-- form -->