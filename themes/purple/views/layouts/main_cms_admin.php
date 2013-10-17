<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
	<meta charset="utf-8" />
	<?php
	  $baseUrl = Yii::app()->theme->baseUrl;
	  Yii::app()->clientScript->registerCoreScript('jquery');
	?>
	<title>Dinas Perhubungan Kota Medan</title>
	<link href="<?php echo $baseUrl; ?>/css/bootstrap.min.css" rel="stylesheet" />
	<link href="<?php echo $baseUrl; ?>/css/bootstrap-responsive.min.css" rel="stylesheet" />
	<link href="<?php echo $baseUrl; ?>/css/font-awesome.css" rel="stylesheet" />
	<link href="<?php echo $baseUrl; ?>/css/style-boot.css" rel="stylesheet" />
	<link href="<?php echo $baseUrl; ?>/css/style_responsive.css" rel="stylesheet" />
	<link href="<?php echo $baseUrl; ?>/css/style_default.css" rel="stylesheet" id="style_color" />

</head>
<!-- END HEAD -->
<!-- BEGIN BODY -->
<body class="fixed-top">
	<!-- BEGIN HEADER -->
	<div class="header navbar navbar-inverse navbar-fixed-top">
		<!-- BEGIN TOP NAVIGATION BAR -->
		<div class="navbar-inner">
			<div class="container-fluid">
				<!-- BEGIN LOGO -->
				<a class="brand" href="<?php echo Yii::app()->baseUrl; ?>">
				Dinas Perhubungan Kota Medan | Admin Bidang
				</a>       
				<!-- END RESPONSIVE MENU TOGGLER -->				
				<!-- BEGIN TOP NAVIGATION MENU -->					
				<ul class="nav pull-right">
					<li class="dropdown user">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">
						<span class="username">Selamat datang, <b><?php echo Yii::app()->user->nama; ?></b></span>
						</a>
						<ul class="dropdown-menu">
							<li><a href="<?php echo Yii::app()->baseUrl; ?>/cms_admin_profil"> My Profile</a></li>
							<li class="divider"></li>
							<li><a href="<?php echo Yii::app()->baseUrl; ?>/site/logout"> Log Out</a></li>
						</ul>
					</li>
					<!-- END USER LOGIN DROPDOWN -->
				</ul>
				<!-- END TOP NAVIGATION MENU -->	
			</div>
		</div>
		<!-- END TOP NAVIGATION BAR -->
	</div>
	<!-- END HEADER -->
	<!-- BEGIN CONTAINER -->
	<div class="page-container row-fluid">
		<!-- BEGIN SIDEBAR -->
		<div class="page-sidebar nav-collapse collapse">
			<!-- BEGIN SIDEBAR MENU -->        	
			<ul>
				<li>
					<!-- BEGIN SIDEBAR TOGGLER BUTTON -->
					<div></div>
					<!-- BEGIN SIDEBAR TOGGLER BUTTON -->
				</li>

				<li><a href="<?php echo Yii::app()->baseUrl; ?>/cms_admin">Dashboard</a></li>
				<li><a href="<?php echo Yii::app()->baseUrl; ?>/cms_admin_berita">Manajemen Berita</a></li>
				<li><a href="<?php echo Yii::app()->baseUrl; ?>/cms_admin_pengumuman">Manajemen Pengumuman</a></li>
				<li><a href="<?php echo Yii::app()->baseUrl; ?>/cms_admin_info_bidang">Manajemen Info Bidang</a></li>
				<li><a href="<?php echo Yii::app()->baseUrl; ?>/cms_admin_info_pengadaan">Manajemen Info Pengadaan</a></li>
				<li><a href="<?php echo Yii::app()->baseUrl; ?>/cms_admin_info_pemenang_pengadaan">Manajemen Info Pemenang Pengadaan</a></li>
				<li><a href="<?php echo Yii::app()->baseUrl; ?>/cms_admin_profil_dinas">Manajemen Profil Dinas</a></li>
				<li><a href="<?php echo Yii::app()->baseUrl; ?>/cms_admin_bidang">Manajemen Bidang</a></li>
				<li><a href="<?php echo Yii::app()->baseUrl; ?>/cms_admin_user_bidang">Manajemen User Bidang</a></li>
				<li><a href="<?php echo Yii::app()->baseUrl; ?>/cms_admin_permohonan">Manajemen Permohonan Perijinan</a></li>
				<li><a href="<?php echo Yii::app()->baseUrl; ?>/cms_admin_user_perusahaan">Manajemen User Perusahaan</a></li>
				<li><a href="<?php echo Yii::app()->baseUrl; ?>/cms_admin_menu">Manajemen Menu</a></li>
				<li><a href="<?php echo Yii::app()->baseUrl; ?>/cms_banner">Manajemen Banner</a></li>
			</ul>
			
			<!-- END SIDEBAR MENU -->
		</div>
		<!-- END SIDEBAR -->
		<!-- BEGIN PAGE -->
		<div class="page-content">
			<!-- BEGIN SAMPLE PORTLET CONFIGURATION MODAL FORM-->
			<div id="portlet-config" class="modal hide">
				<div class="modal-header">
					<button data-dismiss="modal" class="close" type="button"></button>
					<h3>portlet Settings</h3>
				</div>
				<div class="modal-body">
					<p>Here will be a configuration form</p>
				</div>
			</div>
			<!-- END SAMPLE PORTLET CONFIGURATION MODAL FORM-->
			<!-- BEGIN PAGE CONTAINER-->			
			<div class="container-fluid">
				<!-- BEGIN PAGE HEADER-->
				<div class="row-fluid">
					<div class="span12"></div>
				</div>
				<!-- END PAGE HEADER-->
				<!-- BEGIN PAGE CONTENT-->
				<div class="row-fluid">
					<div class="span12">
						<!-- BEGIN EXAMPLE TABLE PORTLET-->
						<div class="portlet box blue">
							<div class="portlet-title">
								<h4>Dinas Perhubungan Kota Medan | Admin Bidang</h4>
							</div>
							<div class="portlet-body">
								<div class="menu-widget">
								<?php
									$this->widget('zii.widgets.CMenu', array(
										'items'=>$this->menu,
										'htmlOptions'=>array('class'=>'operations'),
									));
								?>
								</div>
								<div style="clear:both;"></div>
								<?php echo $content; ?>
							</div>
						</div>
						<!-- END EXAMPLE TABLE PORTLET-->
					</div>
				</div>
				<!-- END PAGE CONTENT -->
			</div>
			<!-- END PAGE CONTAINER-->
		</div>
		<!-- END PAGE -->
	</div>
	<!-- END CONTAINER -->
	<!-- BEGIN FOOTER -->
	<div class="footer">
		2013 &copy; Dinas Perhubungan Kota Medan.
	</div>
	<!-- END FOOTER -->
	<!-- BEGIN JAVASCRIPTS -->
	<!-- Load javascripts at bottom, this will reduce page load time -->
	<script src="<?php echo $baseUrl; ?>/js/bootstrap.min.js"></script>	
</body>
<!-- END BODY -->
</html>

