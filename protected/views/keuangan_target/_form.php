<?php
/* @var $this Keuangan_targetController */
/* @var $model Target */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'target-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'no_rekening'); ?>
		<?php echo $form->textField($model,'no_rekening',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'no_rekening'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'rekening'); ?>
		<?php echo $form->textField($model,'rekening',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'rekening'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'target'); ?>
		<?php echo $form->textField($model,'target',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'target'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tahun'); ?>
		<?php echo $form->textField($model,'tahun'); ?>
		<?php echo $form->error($model,'tahun'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->