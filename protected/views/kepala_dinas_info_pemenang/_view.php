
<div class="view">

<table>
	<tr>
		<td><h3><a href="<?php echo Yii::app()->baseUrl; ?>/kepala_dinas_info_pemenang/<?php echo $data->id_pemenang_pengadaan; ?>"><?php echo CHtml::encode($data->Pengadaan->nama_lelang); ?></a></h3></td>
	</tr>
	<tr>
		<td>Posted on : <?php echo CHtml::encode($data->tgl_pengumuman); ?></td>
	</tr>
</table>

<div class="cleaner_h10"></div>
</div>