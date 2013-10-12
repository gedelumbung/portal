<h2>Dashboard Profil</h2>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'user-bidang-form',
	'enableAjaxValidation'=>false,
)); ?>

	<?php echo $form->errorSummary($model); ?>
	
	<div class="cleaner_h5"></div>

	<?php echo Yii::app()->user->getFlash('result'); ?>

		<div class="cleaner_h10"></div>
		<?php echo $form->labelEx($model,'nama'); ?>
		<div class="cleaner_h5"></div>
		<?php echo $form->textField($model,'nama',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'nama'); ?>

		<div class="cleaner_h10"></div>
		<?php echo $form->labelEx($model,'username'); ?>
		<div class="cleaner_h5"></div>
		<?php echo $form->textField($model,'username',array('size'=>60,'maxlength'=>100,'readonly'=>'true')); ?>
		<?php echo $form->error($model,'username'); ?>

		<div class="cleaner_h10"></div>
		<?php echo $form->labelEx($model,'password'); ?>
		<div class="cleaner_h5"></div>
		<?php $model->password = ""; ?>
		<?php echo $form->passwordField($model,'password',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'password'); ?>

		<div class="cleaner_h10"></div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->