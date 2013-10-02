<?php
/* @var $this Cms_profilController */
/* @var $model Profil */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id_profil'); ?>
		<?php echo $form->textField($model,'id_profil'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_bidang'); ?>
		<?php echo $form->textField($model,'id_bidang'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'isi'); ?>
		<?php echo $form->textArea($model,'isi',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->