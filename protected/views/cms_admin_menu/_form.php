<?php
/* @var $this Cms_admin_menuController */
/* @var $model MenuModel */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'menu-model-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>
		<div class="cleaner_h5"></div>
		<?php echo $form->labelEx($model,'id_parent'); ?>
		<div class="cleaner_h5"></div>
		<?php echo CHtml::dropDownList(
							'MenuModel[id_parent]',$model->id_parent,array('0'=>'Parent') + CHtml::listData(MenuModel::model()->findAll(),'id_menu','menu')
						); ?>
		<?php echo $form->error($model,'id_parent'); ?>
		<div class="cleaner_h5"></div>
		<?php echo $form->labelEx($model,'menu'); ?>
		<div class="cleaner_h5"></div>
		<?php echo $form->textField($model,'menu',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'menu'); ?>
		<div class="cleaner_h5"></div>
		<?php echo $form->labelEx($model,'url_route'); ?>
		<div class="cleaner_h5"></div>
		<?php echo $form->textField($model,'url_route',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'url_route'); ?>
		<div class="cleaner_h5"></div>
		<?php echo $form->labelEx($model,'content'); ?>
		<div class="cleaner_h5"></div>
		<?php echo $form->textArea($model,'content',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'content'); ?>
		<div class="cleaner_h5"></div>
		<?php echo $form->labelEx($model,'posisi'); ?>
        <?php echo $form->dropDownList($model,'posisi',array("bawah"=>"bawah","atas"=>"atas"),array('empty'=>'-- Pilih posisi menu --')); ?>
		<?php echo $form->error($model,'posisi'); ?>
		<div class="cleaner_h5"></div>
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>

<?php $this->endWidget(); ?>

</div><!-- form -->