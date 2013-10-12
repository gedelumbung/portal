

<h2><?php echo $model->judul; ?></h2>

Posted on : <?php echo CHtml::encode($model->tanggal); ?>
<div class="cleaner_h0"></div>
By : <?php echo CHtml::encode($model->UserBidang->nama); ?>
<div class="cleaner_h0"></div>
Bidang : <?php echo CHtml::encode($model->Bidang->nama_bidang); ?>
<div class="cleaner_h0"></div>
Status Pengadaan : <?php echo CHtml::encode($model->status_pengadaan); ?>
<div class="cleaner_h10"></div>
<?php echo $model->isi; ?>
