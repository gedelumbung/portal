
<div class="view">

<table>
	<tr>
		<td><h3><a href="<?php echo Yii::app()->baseUrl; ?>/pengadaan/<?php echo $data->id_pengadaan; ?>"><?php echo CHtml::encode($data->nama_lelang); ?></a></h3></td>
	</tr>
	<tr>
		<td>Posted on : <?php echo CHtml::encode($data->tgl_pengumuman); ?></td>
	</tr>
	<tr>
		<td>Status Pengadaan : <?php echo CHtml::encode($data->stts); ?></td>
	</tr>
</table>

<div class="cleaner_h10"></div>
</div>