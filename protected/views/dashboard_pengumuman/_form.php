<?php
/* @var $this Dashboard_pengumumanController */
/* @var $model Pengumuman */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'pengumuman-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->textField($model,'judul',array('size'=>80,'maxlength'=>150,'placeholder'=>"Ketikkan judul",'class'=>'span8')); ?>
		<?php echo $form->error($model,'judul'); ?>
	</div>
	<br>
	<div class="row">
		<?php
		$this->widget('ext.editMe.widgets.ExtEditMe', array(
		    'name'=>'Pengumuman[isi]',
		    'value'=>$model->isi,
		));
		?>
		<?php echo $form->error($model,'isi'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->