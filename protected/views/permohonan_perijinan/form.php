<h2>Form Permohonan Perijinan</h2>
<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'user-cms-form',
	'enableAjaxValidation'=>true,
	'htmlOptions' => array('class'=>'mainForm',
        'enctype' => 'multipart/form-data',),
)); ?>

	<?php echo $form->errorSummary($model); ?>

		<?php echo $form->labelEx($model,'nama_perusahaan'); ?>
		<div class="cleaner_h5"></div>
		<?php echo $form->textField($model,'nama_perusahaan',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'nama_perusahaan'); ?>

		<div class="cleaner_h20"></div>

		<?php echo $form->labelEx($model,'alamat'); ?>
		<div class="cleaner_h5"></div>
		<?php echo $form->textField($model,'alamat',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'alamat'); ?>

		<div class="cleaner_h20"></div>

		<?php echo $form->labelEx($model,'nama_file'); ?>
		<div class="cleaner_h5"></div>
		<?php echo $form->fileField($model,'nama_file',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'nama_file'); ?>

		<div class="cleaner_h20"></div>

		<div class="control-group">
			<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save', array("class"=>"btn btn-primary")); ?>
		</div>

<?php $this->endWidget(); ?>
