<?php
/* @var $this SiteController */
/* @var $model LoginForm */
/* @var $form CActiveForm  */

$this->pageTitle=Yii::app()->name . ' - Login';
$this->breadcrumbs=array(
	'Login',
);
?>

<h1>Login</h1>

<div class="form" style="width:400px; margin:0px auto;">
<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'login-form',
	'enableAjaxValidation'=>false,
	'clientOptions'=>array(
		'validateOnSubmit'=>true,
	),
	'htmlOptions' => array("class"=>"form-horizontal"),
)); ?>


  <?php echo $form->errorSummary($model); ?>
  <?php echo Yii::app()->user->getFlash('contact'); ?>


    <div class="control-group">
      <?php echo $form->labelEx($model,'username', array("class" => "control-label")); ?>
      <div class="controls">
		<?php echo $form->textField($model,'username'); ?>
		<?php echo $form->error($model,'username'); ?>
      </div>
    </div>

    <div class="control-group">
      <?php echo $form->labelEx($model,'password', array("class" => "control-label")); ?>
      <div class="controls">
    <?php echo $form->passwordField($model,'password'); ?>
    <?php echo $form->error($model,'password'); ?>
      </div>
    </div>

    <div class="control-group">
      <?php echo $form->labelEx($model,'hak_akses', array("class" => "control-label")); ?>
      <div class="controls">
        <?php echo $form->dropDownList($model,'hak_akses',array("admin_bidang"=>"Admin Bidang","web_admin"=>"Web Admin","perusahaan"=>"Perusahaan"),array('empty'=>'-- Pilih Hak Akses --')); ?>
      </div>
    </div>

    <?php if(CCaptcha::checkRequirements()): ?>
    <div class="control-group">
      <?php echo $form->labelEx($model,'verifyCode', array("class" => "control-label")); ?>
      <div class="controls">
        <div style="background-color:#fff; width:230px; margin-bottom:5px;">
        <?php $this->widget('CCaptcha'); ?>
        </div>
        <?php echo $form->textField($model,'verifyCode'); ?>
      </div>
    </div>
  <?php endif; ?>

    <div class="control-group">
		<?php echo $form->label($model,'rememberMe', array("class" => "control-label")); ?>
      <div class="controls">
      <?php echo $form->checkBox($model,'rememberMe'); ?>
		<?php echo $form->error($model,'rememberMe'); ?>
      </div>
    </div>

    <div class="control-group">
      <div class="controls">
		<?php echo CHtml::submitButton('Log In',array("class" => "btn btn-inverse")); ?>
      </div>
    </div>

<?php $this->endWidget(); ?>
</div><!-- form -->
