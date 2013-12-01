<?php
/* @var $this Cms_admin_profil_dinasController */
/* @var $model Profil */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'profil-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<?php echo $form->hiddenField($model,'id_bidang'); ?>
	
	<div class="row">
		<?php $this->widget('ext.redactorjs.ERedactorWidget',array(
		    'model'=>$model,
		    'attribute'=>"isi",
		    'options'=>array(
		        'fileUpload'=>Yii::app()->createUrl('post/fileUpload',array(
		            'attr'=>"isi"
		        )),
		        'fileUploadErrorCallback'=>new CJavaScriptExpression(
		            'function(obj,json) { alert(json.error); }'
		        ),
		        'imageUpload'=>Yii::app()->createUrl('post/imageUpload',array(
		            'attr'=>"isi"
		        )),
		        'imageGetJson'=>Yii::app()->createUrl('post/imageList',array(
		            'attr'=>"isi"
		        )),
		        'imageUploadErrorCallback'=>new CJavaScriptExpression(
		            'function(obj,json) { alert(json.error); }'
		        ),
		    ),
		)); ?>
		<?php echo $form->error($model,'isi'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->