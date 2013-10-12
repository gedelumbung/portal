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


<div id="content-main">


<div id="content-left">

<div id="bg-sidebar">
<div id="head-sidebar">MANAJEMEN DATA</div>
<div id="content-sidebar">
	<ul>
		<li><a href="<?php echo Yii::app()->baseUrl; ?>/permohonan_perijinan">Data Permohonan</a></li>
		<li><a href="<?php echo Yii::app()->baseUrl; ?>/permohonan_perijinan/form">Form Permohonan</a></li>
	</ul>
</div>
</div>
<div id="bottom-sidebar"></div>

<div class="cleaner_h20"></div>

<div id="bg-sidebar">
<div id="head-sidebar">MANAJEMEN AKUN</div>
<div id="content-sidebar">
	<ul>
		<li><a href="<?php echo Yii::app()->baseUrl; ?>/dashboard_profil">Manajemen Profil</a></li>
		<li><a href="<?php echo Yii::app()->baseUrl; ?>/site/logout">Log Out</a></li>
	</ul>
</div>
</div>
<div id="bottom-sidebar"></div>


</div>

<div id="content-detail">

<?php echo $content; ?>

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
