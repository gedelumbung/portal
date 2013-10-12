<h2>Dashboard Perusahaan</h2>

<p>
	Selamat datang <b><?php echo Yii::app()->user->nama; ?></b>
</p>
<p>
	Hak akses anda sebagai user <b><?php echo Yii::app()->user->level; ?></b>
</p>

<div class="cleaner_h20"></div>
Nama Perusahaan : <?php echo $model->nama_perusahaan; ?>
<div class="cleaner_h5"></div>
Alamat Perusahaan : <?php echo $model->alamat; ?>
<div class="cleaner_h5"></div>
<?php if(!empty($model->nama_file)){?>
File Permohonan : <a href="<?php echo Yii::app()->baseUrl; ?>/permohonan/<?php echo $model->nama_file; ?>">Download File</a>
<?php }else{ ?>
File Permohonan : - ?>
<?php } ?>
<div class="cleaner_h5"></div>
Status Permohonan : <?php echo $model->stts; ?>
<div class="cleaner_h30"></div>

Silahkan download contoh template surat permohonan perijinan : <a href="<?php echo Yii::app()->baseUrl; ?>/permohonan/template-permohonan.docx">Download File</a>