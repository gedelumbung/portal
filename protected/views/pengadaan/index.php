<div id="title-news">Info Pengadaan  <?php echo $nama_bidang; ?></div>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
