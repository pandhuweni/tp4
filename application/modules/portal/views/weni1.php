<!DOCTYPE html>
<html lang="en">
<head>
	<title>Kejaksaan Republik Indonesia</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link rel="icon" href="favicon.ico" type="image/x-icon" />
	<!-- CSS INCLUDE -->
	<link rel="stylesheet" type="text/css" id="theme" href="<?php echo base_url() ?>assets/css/theme-default.css" />
	<link rel="stylesheet" type="text/css" id="theme" href="<?php echo base_url() ?>assets/builder/css/builder.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/style.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/weni1.css">
	<!-- EOF CSS INCLUDE -->
</head>
<body class="">
	<div class="page-container page-navigation-top page-navigation-top-custom">
		<div class="page-content" style="height: 739px;">
			<div class="page-content-header wrapper-header">
				<a href="<?php echo base_url('index.php/portal/weni1') ?>" class="logo">
					<img src="<?php echo base_url('assets/img/logo-kejaksaan.png') ?>">
				</a>
			</div>
			<ul class="x-navigation x-navigation-horizontal">
				<li class="xn-navigation-control">
					<a href="#" class="x-navigation-control"></a>
				</li>
				<li>
					<a href="#">						
						<span class="xn-text">DASHBOARD</span>
					</a>
				</li>
				<li class="xn-openable">
					<a href="#"><span class="xn-text">PROFIL</span></a>
					<ul>
						<li><a href="#">LATAR BELAKANG</a></li>
						<li><a href="#">TENTANG TP4</a></li>
						<li><a href="#">VISI DAN MISI</a></li>
						<li><a href="#">TUGAS DAN WEWENANG</a></li>
						<li><a href="#">MEKANISME BEKERJA</a></li>
					</ul>
				</li>
				<li class="xn-openable">
					<a href="#"><span class="xn-text">KEGIATAN</span></a>
					<ul>
						<li><a href="#">KEGIATAN WALMAN</a></li>
						<li><a href="#">TP4 D</a></li>
						<li><a href="#">TP4 P</a></li>
					</ul>
				</li>
				<li class="xn-openable">
					<a href="#"><span class="xn-text">PERATURAN</span></a>
					<ul>
						<li><a href="#">UU</a></li>
						<li><a href="#">PP</a></li>
						<li><a href="#">KEPRES</a></li>
						<li><a href="#">PERDA</a></li>
						<li><a href="#">PERMEN</a></li>
						<li><a href="#">PERJA</a></li>
						<li><a href="#">BUMN</a></li>
					</ul>
				</li>
				<li class="xn-openable">
					<a href="#"><span class="xn-text">KEMITRAAN</span></a>
					<ul>
						<li><a href="#">KEMENTRIAN</a></li>
						<li><a href="#">BUMN</a></li>
						<li><a href="#">BMUD</a></li>
						<li><a href="#">PEMERINTAH PROVINSI</a></li>
						<li><a href="#">PEMERINTAH KOTA / DAERAH</a></li>
					</ul>
				</li>
				<li><a href="#">PROGRAM KERJA</a></li>
				<li><a href="#">LAPORAN</a></li>
				<li class="pull-right">
					<a href="#">LOG IN <i class="fa fa-sign-in"></i></a>
				</li>
			</ul>
			<!-- <ul class="breadcrumb">
				<li>
					<a href="#">Link</a>
				</li>
				<li class="active">Active</li>
			</ul> -->

			<!-- Content -->
			<div class="page-content-wrap">

				<!-- Slider -->
				<div class="container-fluid wrapper-slider">
					
				<div class="cycle-slideshow " >
					<span class="cycle-prev">&#9001;</span> <!-- Untuk membuat tanda panah di kiri slider -->
					<span class="cycle-next">&#9002;</span> <!-- Untuk membuat tanda panah di kanan slider -->
					<span class="cycle-pager"></span>  <!-- Untuk membuat tanda bulat atau link pada slider -->
					<img src="<?php echo base_url() ?>assets/img/1.jpg" alt="Gambar Pertama" title="test">
					<img src="<?php echo base_url() ?>assets/img/2.jpg" alt="Gambar Kedua">
					<img src="<?php echo base_url() ?>assets/img/3.jpg" alt="Gambar Ketiga">
					<img src="<?php echo base_url()?>assets/img/4.jpg" alt="Gambar Keempat">
					<img src="<?php echo base_url() ?>assets/img/1.png" alt="Gambar Kelima">
				</div>
				</div>
				<!-- /Slider -->


				<!-- PANEL KEGIATAN -->
				
				<div class="row kegiatan-root" >
					<div class="col-md-9">
						<div class="col-ms-12 daftar-kegiatan">
							<h3>Daftar Kegiatan</h3>
						</div>
						<div class="col-md-4">
							<div class="panel panel-default">
								<div class="panel-heading">
									<div class="panel-title-box">
										<h3>KEGIATAN</h3>
									</div>
								</div>
								<div class="panel-body padding-0">
									<div class="chart-holder" id="dashboard-line-1" style="height: 200px;"></div>
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="panel panel-default">
								<div class="panel-heading">
									<div class="panel-title-box">
										<h3>KEGIATAN</h3>
									</div>
								</div>
								<div class="panel-body padding-0">
									<div class="chart-holder" id="dashboard-line-1" style="height: 200px;"></div>
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="panel panel-default">
								<div class="panel-heading">
									<div class="panel-title-box">
										<h3>KEGIATAN</h3>
									</div>
								</div>
								<div class="panel-body padding-0">
									<div class="chart-holder" id="dashboard-line-1" style="height: 200px;"></div>
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="panel panel-default">
								<div class="panel-heading">
									<div class="panel-title-box">
										<h3>KEGIATAN</h3>
									</div>
								</div>
								<div class="panel-body padding-0">
									<div class="chart-holder" id="dashboard-line-1" style="height: 200px;"></div>
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="panel panel-default">
								<div class="panel-heading">
									<div class="panel-title-box">
										<h3>KEGIATAN</h3>
									</div>
								</div>
								<div class="panel-body padding-0">
									<div class="chart-holder" id="dashboard-line-1" style="height: 200px;"></div>
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="panel panel-default">
								<div class="panel-heading">
									<div class="panel-title-box">
										<h3>KEGIATAN</h3>
									</div>
								</div>
								<div class="panel-body padding-0">
									<div class="chart-holder" id="dashboard-line-1" style="height: 200px;"></div>
								</div>
							</div>
						</div>

					</div>
					<div class="col-md-3">
						<div class="panel panel-default" style="height: 540px">
							<div class="panel-heading">
								<div class="panel-title-box">
									<h3>SPONSOR</h3>
								</div>
							</div>
							<div class="panel-body padding-0">
								<div class="chart-holder" id="dashboard-line-1" style="height: 200px;"></div>
							</div>
						</div>
					</div>
				</div>

				<!-- FOOTER -->
				<footer class="footer">
					<div class="container">

						<div class="row">
							<div class="col-sm-12">
								<h3 class="text-muted">Kejaksaan Republik Indonesia</h3>
							</div>
							<div class="col-sm-3 col-md-3 text-muted">
								<!-- .weight -->
								<div class="weight">
									<strong>About Us</strong>
									<p>Lorem ipsum dolor sit amet, onsectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
								</div>
								<!--/.weight -->
							</div>
							<div class="col-sm-2 col-md-2 text-muted">
								<!-- .weight -->
								<div class="weight">
									<strong>Profil</strong>
									<ul>
										<li><a href="#">Latar Belakang</a></li>
										<li><a href="#">Tentang T4</a></li>
										<li><a href="#">Visi dan Misi</a></li>
										<li><a href="#">Tugas dan Wewenang</a></li>
										<li><a href="#">Mekanisme Bekerja</a></li>
									</ul>
								</div>
								<!-- /.weight -->
							</div>
							<div class="col-sm-2 col-md-2 text-muted">
								<!-- .weight -->
								<div class="weight">
									<strong>Kegiatan</strong>
									<ul>
										<li><a href="#">Kegiatan Walman</a></li>
										<li><a href="#">TP4 D</a></li>
										<li><a href="#">TP4 P</a></li>
									</ul>
								</div>
								<!-- /.weight -->
							</div>

							<div class="col-sm-2 col-md-2 text-muted">
								<!-- .weight -->
								<div class="weight">
									<strong>Kemitraan</strong>
									<ul>
										<li><a href="#">Kementrian</a></li>
										<li><a href="#">BUMN</a></li>
										<li><a href="#">BUMD</a></li>
										<li><a href="#">Pemerintah Provinsi</a></li>
										<li><a href="#">Pemerintah Kota / Daerah</a></li>
									</ul>
								</div>
								<!-- /.weight -->
							</div>
							<!-- Kontak Kami -->
							<div class="col-sm-3 col-md-3  text-muted">
								<div class="weight">
									<strong>Kontak Kami</strong>
									<p>PUSAT PENERANGAN HUKUM  KEJAKSAAN AGUNG R.I</p>
									<p>Tel: 1234 - 5678 - 9012<br/>Email: support@Prolaw.com<br/>Working Hours: 8:00 a.m - 17:00 a.m</p>
								</div>
							</div>
							<div class="col-sm-12">
							<hr>
								<p class="text-muted">@2017 Kejaksaan Republik Indonesia</p>							</div>
								<!-- /Kontak Kami -->
								</div>
						</div>
					</footer>
				</div>
			</div>
		</div>
		<!-- Javascript -->
		<script type="text/javascript" src="<?php echo base_url() ?>assets/js/jQuery-2.1.4.min.js"></script> 
		<script type="text/javascript" src="<?php echo base_url() ?>assets/js/jquery.cycle2.min.js"></script> 
		<script type="text/javascript" src="<?php echo base_url() ?>assets/js/plugins/jquery/jquery.min.js"></script>
		<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-mousewheel/3.1.12/jquery.mousewheel.min.js"></script>
		<script type="text/javascript" src="<?php echo base_url() ?>assets/js/plugins/jquery/jquery-ui.min.js"></script>
		<script type="text/javascript" src="<?php echo base_url() ?>assets/js/plugins/bootstrap/bootstrap.min.js"></script>
		<script type="text/javascript" src="<?php echo base_url() ?>assets/js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js"></script>
		<script type="text/javascript" src="<?php echo base_url() ?>assets/js/plugins/icheck/icheck.min.js"></script>
		<script type="text/javascript" src="<?php echo base_url() ?>assets/js/plugins.js"></script>
		<script type="text/javascript" src="<?php echo base_url() ?>assets/js/actions.js"></script>
		<!-- /Javascript -->
	</body>
	</html>