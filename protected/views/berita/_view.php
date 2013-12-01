
<div class="view">

<table>
	<tr>
		<td><h3><a href="<?php echo Yii::app()->baseUrl; ?>/berita/<?php echo $data->id_berita; ?>"><?php echo CHtml::encode($data->judul); ?></a></h3></td>
	</tr>
	<tr>
		<td>Posted on : <?php echo CHtml::encode($data->tanggal); ?></td>
	</tr>
	<tr>
		<td>By : <?php echo CHtml::encode($data->UserBidang->nama); ?></td>
	</tr>
	<tr>
		<td>Bidang : <?php echo CHtml::encode($data->Bidang->nama_bidang); ?></td>
	</tr>
</table>

<div class="cleaner_h10"></div>
</div>