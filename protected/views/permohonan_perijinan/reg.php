<h2>Form Registrasi Permohonan Perijinan</h2>
<p>Silahkan log in sebagai perusahaan atau melakukan registrasi untuk mengakses halaman ini.</p>

<div class="form" style="width:400px; margin:0px auto;">
<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'reg-form',
	'enableAjaxValidation'=>true,
	'clientOptions'=>array(
		'validateOnSubmit'=>true,
	),
	'htmlOptions' => array("class"=>"form-horizontal"),
)); ?>


  <?php echo $form->errorSummary($model); ?>
  <?php echo Yii::app()->user->getFlash('result'); ?>

  <div class="cleaner_h10"></div>


    <div class="control-group">
      <?php echo $form->labelEx($model,'nama', array("class" => "control-label")); ?>
      <div class="controls">
		<?php echo $form->textField($model,'nama', array("size" => "60")); ?>
		<?php echo $form->error($model,'nama'); ?>
      </div>
    </div>

    <div class="control-group">
      <?php echo $form->labelEx($model,'username', array("class" => "control-label")); ?>
      <div class="controls">
		<?php echo $form->textField($model,'username', array("size" => "60")); ?>
		<?php echo $form->error($model,'username'); ?>
      </div>
    </div>

    <div class="control-group">
      <?php echo $form->labelEx($model,'password', array("class" => "control-label")); ?>
      <div class="controls">
    <?php $model->password = ""; ?>
    <?php echo $form->passwordField($model,'password', array("size" => "60")); ?>
    <?php echo $form->error($model,'password'); ?>
      </div>
    </div>

    <div class="control-group">
      <?php echo $form->labelEx($model,'email', array("class" => "control-label")); ?>
      <div class="controls">
    <?php echo $form->textField($model,'email', array("size" => "60")); ?>
    <?php echo $form->error($model,'email'); ?>
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
        <?php echo $form->error($model,'verifyCode'); ?>
      </div>
    </div>
  <?php endif; ?>

    <div class="control-group">
      <div class="controls">
		<?php echo CHtml::submitButton('Kirim Data',array("class" => "btn btn-inverse")); ?>
      </div>
    </div>

<?php $this->endWidget(); ?>
</div><!-- form -->
