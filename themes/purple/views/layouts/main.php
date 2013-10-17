<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<?php
  $baseUrl = Yii::app()->theme->baseUrl;
  Yii::app()->clientScript->registerCoreScript('jquery');
?>
<link href="<?php echo $baseUrl; ?>/css/style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="<?php echo $baseUrl; ?>/js/menu.js"></script>

<title><?php echo CHtml::encode(Yii::app()->name); ?></title>
</head>

<body onload="goforit()">
	<div id="logo">
		<div id="left-logo"><img src="<?php echo $baseUrl; ?>/images/logo.png" /></div>
		<div id="right-logo">
		<div class="cleaner_h10"></div>
		<div id="w2b-searchbox">
		<form id="w2b-searchform" action="pencarian" method="POST">
			<input type="text" id="s" name="key" placeholder="Pencarian...."/>
			<input type="image" src="<?php echo $baseUrl; ?>/images/blank.gif" id="sbutton" />
		</form>
		</div></div>
	</div>
<div id="header">
	<div id="top-menu">
		<div id="inner-top-menu">
			<div id="left-inner-top-menu">
				<?php
					$this->widget('MainMenu');
				?>
			</div>
			<div id="right-inner-top-menu">
			<script src="<?php echo $baseUrl; ?>/js/clock.js" type="text/javascript"></script><span id="clock"></span>
			</div>
		</div>
	</div>
	<div class="cleaner_h0"></div>
	<div id="img-banner"><img src="<?php echo $baseUrl; ?>/images/img-banner.jpg" align="middle" /></div>

</div>

<div id="bottom-menu">
<div id="center-bottom-menu">
  <div class="suckertreemenu">
	<?php
		$this->widget('SecondMenu');
	?>
</div>
</div>
</div>

<div class="cleaner_h30"></div>
<div class="cleaner_h5"></div>
<div class="cleaner_h1"></div>
<div class="cleaner_h1"></div>
<div class="cleaner_h1"></div>

<div id="bread-crumbs">
	<ul id="crumbs">
		<li><a href="#">Beranda</a></li>
		<li>Selamat Datang di Website <?php echo CHtml::encode(Yii::app()->name); ?></li>
	</ul>
</div>
	<div class="cleaner_h10"></div>

<?php if(Yii::app()->controller->id.'/'.Yii::app()->controller->action->id=="site/index"){ ?>
<div id="banner">
<div id="left-banner">
<div id="slider" class="nivoSlider">   
<?php
$dt_banner = Banner::model()->findAll();
$arr = array();
foreach($dt_banner as $dt_b)
{
	array_push($arr,array('image'=>Yii::app()->baseUrl.'/banner/'.$dt_b->gambar,'alt'=>$dt_b->judul));
}
$this->widget('ext.coinSlider.CoinSliderWidget', array(
		    'items' => $arr,
		    )
		);
?>  
</div>
</div>

<div id="right-banner">
<div id="sub-right-banner">
<div class="cleaner_h5"></div>
<h1>INFO BIDANG TERKINI</h1>
<div class="cleaner_h10"></div>

<?php
	$this->widget('InfoBidangBanner');
?>

<a href=""><strong>-- Indexs Berita --</strong></a>
</div>
</div>
</div>

</div>

<div class="cleaner_h20"></div>
<?php } ?>

<div id="content-main">


<div id="content-left">

<div id="bg-kepsek">
<div id="head-sidebar">KEPALA DINAS
</div>
<div id="content-kepsek">
<img src="<?php echo $baseUrl; ?>/images/kepsek.jpg" />
<div class="cleaner_h0"></div>
RENWARD PARAPAT, ATD, MT
<div class="cleaner_h0"></div>
Kepala Dinas Perhubungan Kota Medan
<div class="cleaner_h10"></div>
</div>
</div>
<div id="bottom-sidebar"></div>

<div class="cleaner_h20"></div>

<div id="bg-sidebar">
<div id="head-sidebar">BERITA TERBARU</div>
<div id="content-sidebar">
<?php
	$this->widget('BeritaWidget');
?>
</div>
</div>
<div id="bottom-sidebar"></div>

<div class="cleaner_h20"></div>

<div id="bg-sidebar">
<div id="head-sidebar">SUB BIDANG</div>
<div id="content-sidebar">
<?php
	$this->widget('BidangWidget');
?>
</div>
</div>
<div id="bottom-sidebar"></div>

</div>

<div id="content-center">

<?php echo $content; ?>

</div>


<div id="content-right">

<div id="bg-sidebar">
<div id="head-sidebar">PENGUMUMAN TERBARU</div>
<div id="content-sidebar">
<?php
	$this->widget('PengumumanWidget');
?>
</div>
</div>
<div id="bottom-sidebar"></div>

<div class="cleaner_h20"></div>

<div id="bg-sidebar">
<div id="head-sidebar">INFO BIDANG</div>
<div id="content-sidebar">
<?php
	$this->widget('InfoBidangWidget');
?>
</div>
</div>
<div id="bottom-sidebar"></div>

<div class="cleaner_h20"></div>

<div id="bg-sidebar">
<div id="head-sidebar">INFO PENGADAAN</div>
<div id="content-sidebar">
<?php
	$this->widget('InfoPengadaanWidget');
?>
</div>
</div>
<div id="bottom-sidebar"></div>

</div>

<div class="cleaner_h0"></div>

</div>


<div class="cleaner_h20"></div>

<div id="footer-menu">
<div id="center-footer-menu">
<?php
	$this->widget('MainMenu');
?>
</div>
</div>

<div id="footer">
<div id="center-footer">
Copyright &copy 2013 <?php echo CHtml::encode(Yii::app()->name); ?>. All Rights Reserved.<br />
<?php echo CHtml::encode(Yii::app()->name); ?> - Indonesia. Tel.-62 333 420600. Fax.-62 333 414890<br />
You come here with the IP Address 180.247.235.203<br />
</div>
</div>


</body>
</html>
