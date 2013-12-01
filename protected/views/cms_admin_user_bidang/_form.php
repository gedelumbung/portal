<?php
/* @var $this Cms_admin_user_bidangController */
/* @var $model UserBidang */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'user-bidang-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

		<?php echo $form->labelEx($model,'id_bidang'); ?>
		<div class="cleaner_h5"></div>
		<?php echo CHtml::dropDownList(
							'UserBidang[id_bidang]',$model->id_bidang,array(''=>'Semua') + CHtml::listData(Bidang::model()->findAll(),'id_bidang','nama_bidang')
						); ?>
		<?php echo $form->error($model,'id_bidang'); ?>

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
		<?php echo $form->labelEx($model,'pengadaan'); ?>
		<div class="cleaner_h5"></div>
        <?php echo $form->dropDownList($model,'pengadaan',array("0"=>"Tidak","1"=>"Ya"),array('empty'=>'-- Pilih User Pengadaan --')); ?>
		<?php echo $form->error($model,'pengadaan'); ?>

		<div class="cleaner_h10"></div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->