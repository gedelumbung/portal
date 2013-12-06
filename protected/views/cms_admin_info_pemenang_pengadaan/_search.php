<?php
/* @var $this Cms_admin_info_pemenang_pengadaanController */
/* @var $model PemenangPengadaanCms */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'no_reff'); ?>
		<?php echo $form->textField($model,'no_reff',array('size'=>30,'maxlength'=>30)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'kode_lelang'); ?>
		<?php echo $form->textField($model,'kode_lelang',array('size'=>30,'maxlength'=>30)); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->