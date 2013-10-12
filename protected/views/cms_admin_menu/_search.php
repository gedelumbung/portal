<?php
/* @var $this Cms_admin_menuController */
/* @var $model MenuModel */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id_menu'); ?>
		<?php echo $form->textField($model,'id_menu'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_parent'); ?>
		<?php echo $form->textField($model,'id_parent'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'menu'); ?>
		<?php echo $form->textField($model,'menu',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'url_route'); ?>
		<?php echo $form->textField($model,'url_route',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'content'); ?>
		<?php echo $form->textArea($model,'content',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'posisi'); ?>
		<?php echo $form->textField($model,'posisi',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->