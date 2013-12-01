<h2>Info Pemenang Pengadaan  <?php echo $nama_bidang; ?></h2>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
