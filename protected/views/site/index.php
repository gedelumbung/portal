<div id="bg-welcome">
<h1>Welcome, <?php echo CHtml::encode(Yii::app()->name); ?></h1>
<div class="cleaner_h0"></div>
<h3>Media Informasi <?php echo CHtml::encode(Yii::app()->name); ?></h3>
<div class="cleaner_h5"></div>
<div class="line_dotted"></div>
<div class="cleaner_h5"></div>
<img src="<?php echo Yii::app()->theme->baseUrl; ?>/images/logo-sekolah.jpg" style="float:left; padding:3px; border:1px solid #333333; background:#FFFFFF; margin:5px; width:75px;" />
Kami Menyambut baik terbitnya Website Portal Dinas Perhubungan Kota Medan , dengan harapan dipublikasinya website ini sekolah berharap : Peningkatan layanan kepada masyarakat pada umumnya semakin meningkat. 
</div>

<div class="cleaner_h10"></div>


<div id="title-news">BERITA TERBARU</div>

<div id="news-list">

<?php
	$this->widget('BeritaFrontWidget');
?>
</div>