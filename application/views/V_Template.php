<!doctype html>
<html lang="en">

<head>
	<meta charset="utf-8" />
	<link rel="apple-touch-icon" sizes="76x76" href="<?= base_url('assets/img/apple-icon.png') ?>">
	<link rel="icon" type="image/png" href="<?= base_url('assets/img/Desa-Logo.png') ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<title>
		Desa Kumpulrejo
	</title>
	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no'
		name='viewport' />
	<!--     Fonts and icons     -->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet" />
	<!-- CSS Files -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
		integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
	<link href="<?= base_url('assets/css/bootstrap.min.css') ?>" rel="stylesheet" />
	<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css" rel="stylesheet" />
	<link href="<?= base_url('assets/css/paper-dashboard.css?v=2.0.1') ?>" rel="stylesheet" />
	<link href="<?= base_url('assets/css/fistyle.css') ?>" rel="stylesheet" />
	<link href="<?= base_url('assets/css/style-configure.css') ?>" rel="stylesheet" />

	<!-- CSS Just for demo purpose, don't include it in your project -->
	<link href="<?= base_url('assets/demo/demo.css') ?>" rel="stylesheet" />

</head>

<body class="">
	<button onclick="topFunction()" id="ScllTopBtn" title="Go to top">Top</button>
	<!-- ========================================= Navbar ============================== -->
	<div class="wrapper ">
		<div class="sidebar" data-color="white" data-active-color="danger">
			<div class="logo">
				<a href="<?= base_url() ?>" class="simple-text logo-mini">
					<div class="logo-image-small">
						<img src="<?= base_url('assets/img/Desa-Logo.png') ?>">
					</div>
				</a>
				<a href="<?= base_url() ?>" class="simple-text logo-normal">
					Desa<br>Kumpulrejo
				</a>
			</div>
			<div class="sidebar-wrapper">
				<ul class="nav">
					<li>
						<a href="<?= base_url('') ?>">
							<i class="nc-icon nc-bank"></i>
							<p>Home</p>
						</a>
					</li>
					<li>
						<a data-toggle="collapse" href="#Informasi" class="collapsed" aria-expanded="false">
							<!-- ================================ Navbar Pc start ======================== -->
							<i class="nc-icon nc-alert-circle-i"></i>
							<p>Profil Desa<span class="caret"></span></p>
						</a>
						<div class="collapse" id="Informasi">
							<ul class="nav">
								<li>
									<a href="<?= base_url('Profile') ?>">
										<span class="sidebar-normal"> Profil Desa </span>
									</a>
								</li>
								<li>
									<a href="<?= base_url('Profile') ?>">
										<span class="sidebar-normal"> Visi Misi </span>
									</a>
								</li>
								<li>
									<a href="<?= base_url('') ?>">
										<span class="sidebar-normal"> Peta Desa </span>
									</a>
								</li>
								<li>
									<a href="<?= base_url('Aparatur') ?>">
										<span class="sidebar-normal"> Aparatur Desa </span>
									</a>
								</li>
								<li>
									<a href="<?= base_url('Profile') ?>">
										<span class="sidebar-normal"> Sejarah Desa</span>
									</a>
								</li>
								<li>
									<a href="<?= base_url('Fasilitas') ?>">
										<span class="sidebar-normal">Fasilitas Umum</span>
									</a>
								</li>

								<li>
									<a href="<?= base_url('Galeri') ?>">
										<span class="sidebar-normal">Galleri</span>
									</a>
								</li>
								<li>
									<a href="<?= base_url('Profile/Peraturan') ?>">
										<span class="sidebar-normal"> Peraturan Desa </span>
									</a>
								</li>
								<li>
									<a href="http://kumpulrejo.desa.id/public/menu/hubungikami">
										<span class="sidebar-normal"> Hubungi kami </span>
									</a>
								</li>
							</ul>
						</div>
					</li>
					<!-- ================================= Data Desa ========================== -->
					<li>
						<a data-toggle="collapse" href="#Data" class="collapsed" aria-expanded="false">
							<i class="nc-icon nc-book-bookmark"></i>
							<p>Data Desa<span class="caret"></span></p>
						</a>
						<div class="collapse" id="Data">
							<ul class="nav">
								<li>
									<a href="<?= base_url('Pendidikan') ?>">
										<span class="sidebar-normal"> Kependidikan</span>
									</a>
								</li>
								<li>
									<a href="<?= base_url('Kependudukan') ?>">
										<span class="sidebar-normal"> Kependudukan </span>
									</a>
								</li>
								<li>
									<a href="<?= base_url('Profile/Kesejahteraan') ?>">
										<span class="sidebar-normal"> Keuangan Desa </span>
									</a>
								</li>
								<li>
									<a href="http://kumpulrejo.desa.id/public/menu/siskeudes">
										<span class="sidebar-normal"> siskeudes </span>
									</a>
								</li>
								<li>
									<a href="http://kumpulrejo.desa.id/public/menu/hargapokokdesa">
										<span class="sidebar-normal"> Harga Pokok </span>
									</a>
								</li>
								<li>
									<a href="<?= base_url('Profile/Kesejahteraan') ?>">
										<span class="sidebar-normal"> Kemiskinan </span>
									</a>
								</li>
							</ul>
						</div>
					</li>
					<!-- ====================================== Mulai Kabar Desa =============================== -->

					<li>
						<a data-toggle="collapse" href="#Data01" class="collapsed" aria-expanded="false">
							<i class="bi bi-bank2"></i>
							<p>Kabar Desa<span class="caret"></span></p>
						</a>
						<div class="collapse" id="Data01">
							<ul class="nav">
								<li>
									<a href="<?= base_url('') ?>">
										<span class="sidebar-normal"> Berita</span>
									</a>
								</li>
								<li>
									<a href="<?= base_url('Potensi') ?>">
										<span class="sidebar-normal"> Kegiatan </span>
									</a>
								</li>
								<li>
									<a href="http://kumpulrejo.desa.id/public/menu/agenda">
										<span class="sidebar-normal"> Agenda </span>
									</a>
								</li>
					</li>
				</ul>
			</div>
			</li>
			<!-- =================================== Potensi ========================= -->
			<li>
				<a data-toggle="collapse" href="#Data02" class="collapsed" aria-expanded="false">
					<i class="bi bi-bar-chart-fill"></i>
					<p>Potensi<span class="caret"></span></p>
				</a>
				<div class="collapse" id="Data02">
					<ul class="nav">
						<li>
							<a href="http://kumpulrejo.desa.id/public/menu/bid">
								<span class="sidebar-normal">Bursa Desa</span>
							</a>
						</li>
						<li>
							<a href="<?= base_url('Potensi') ?>">
								<span class="sidebar-normal">Potensi Desa</span>
							</a>
						</li>
						<li>
							<a href="http://kumpulrejo.desa.id/public/menu/bumdesdesa">
								<span class="sidebar-normal">Bumdes</span>
							</a>
						</li>
					</ul>
				</div>
			</li>
			<!-- Petanda Desa -->
			<li>
				<a href="http://kumpulrejo.desa.id/public/menu/petanda">
					<i class="bi bi-archive-fill"></i>
					<p>Petanda Desa</p>
				</a>
			</li>
			<li>
				<a href="http://kumpulrejo.desa.id/public/menu/petanda">
					<i class="bi bi-boombox-fill"></i>
					<p>wisata</p>
				</a>
			</li>
			<li>
				<a href="https://dokar.kendalkab.go.id/dashbord/public_dashbord">
					<i class="bi bi-door-open-fill"></i>
					<p>DOKAR-Dashboard</p>
				</a>
			</li>
			<li>
				<a href="https://corona.kendalkab.go.id/">
					<i class="nc-icon nc-planet"></i>
					<p>Covid-19</p>
				</a>
			</li>
			</ul>
		</div>
	</div>
	<div class="main-panel" style="min-height: 100vh;">
		<!-- Navbar -->
		<nav class="navbar navbar-expand-lg navbar-absolute fixed-top navbar-transparent">
			<div class="container-fluid">
				<div class="navbar-wrapper">
					<!-- Tombol -->
					<div class="navbar-toggle">
						<div class="nav-mobile">
							<!-- ========================================== lanjutkan untuk navbar ============================= -->

							<button class="" type="button" data-bs-toggle="offcanvas" style="border: none;"
								data-bs-target="#offcanvasWithBothOptions" aria-controls="offcanvasWithBothOptions">

								<span class="navbar-toggler-bar bar1"></span>
								<span class="navbar-toggler-bar bar2"></span>
								<span class="navbar-toggler-bar bar3"></span>
							</button>

							<!-- Navbar Untuk Mobile version -->
							<div class="offcanvas offcanvas-start" data-bs-scroll="true" tabindex="-1"
								id="offcanvasWithBothOptions" aria-labelledby="offcanvasWithBothOptionsLabel">
								<div class="offcanvas-header">
									<h5 class="offcanvas-title" id="offcanvasWithBothOptionsLabel">
										<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
											fill="currentColor" class="bi bi-folder-fill" viewBox="0 0 16 16">
											<path
												d="M9.828 3h3.982a2 2 0 0 1 1.992 2.181l-.637 7A2 2 0 0 1 13.174 14H2.825a2 2 0 0 1-1.991-1.819l-.637-7a1.99 1.99 0 0 1 .342-1.31L.5 3a2 2 0 0 1 2-2h3.672a2 2 0 0 1 1.414.586l.828.828A2 2 0 0 0 9.828 3zm-8.322.12C1.72 3.042 1.95 3 2.19 3h5.396l-.707-.707A1 1 0 0 0 6.172 2H2.5a1 1 0 0 0-1 .981l.006.139z" />
										</svg>
										Desa Kumpulrejo
									</h5>
									<button type="button" class="btn-close" data-bs-dismiss="offcanvas"
										aria-label="Close"></button>
								</div>
								<!-- ===================================== Navbar Mobile Start ============================= -->
								<div class="offcanvas-body">
									<ul class="list-group list-group-flush">
										<li class="list-group-item">
											<a href="<?= base_url('') ?>">
												<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
													fill="currentColor" class="bi bi-bank2" viewBox="0 0 16 16">
													<path
														d="M8.277.084a.5.5 0 0 0-.554 0l-7.5 5A.5.5 0 0 0 .5 6h1.875v7H1.5a.5.5 0 0 0 0 1h13a.5.5 0 1 0 0-1h-.875V6H15.5a.5.5 0 0 0 .277-.916l-7.5-5zM12.375 6v7h-1.25V6h1.25zm-2.5 0v7h-1.25V6h1.25zm-2.5 0v7h-1.25V6h1.25zm-2.5 0v7h-1.25V6h1.25zM8 4a1 1 0 1 1 0-2 1 1 0 0 1 0 2zM.5 15a.5.5 0 0 0 0 1h15a.5.5 0 1 0 0-1H.5z" />
												</svg>
												Home
											</a>
										</li>
										<!-- Akhiran -->
										<li class="list-group-item" class="drop-menu-01">

											<span>
												<a href="javascript:void(0);" onclick="dropMenu01()">
													<i class="nc-icon nc-alert-circle-i"></i>
													Profil Desa
												</a>
											</span>


											<span style="float:right">
												<a href="javascript:void(0)" onclick="reMenu01()"
													class="display-pop-up-01" id="re-drop-01">
													<i class="bi bi-eject-fill"></i>
												</a>
											</span>

											<div id="display-pop-up-01" class="display-pop-up-01">
												<!-- ================================== Dropdown Satu opada Menu ============================== -->
												<ul class="list-group list-group-flush">
													<li class="list-group-item">
														<a href="<?= base_url('Profile') ?>">Profile Desa</a>
													</li>
													<li class="list-group-item">
														<a href="<?= base_url('Profile') ?>">Visi Misi</a>
													</li>
													<li class="list-group-item">
														<a href="<?= base_url('') ?>">Peta Desa</a>
													</li>
													<li class="list-group-item">
														<a href="<?= base_url('Aparatur') ?>">Aparatur Desa</a>
													</li>
													<li class="list-group-item">
														<a href="<?= base_url('Profile') ?>">Sejarah Desa</a>
													</li>
													<li class="list-group-item">
														<a href="<?= base_url('Fasilitas') ?>">Fasilitas Umum</a>
													</li>
													<li class="list-group-item">
														<a href="<?= base_url('Galeri') ?>">Galleri</a>
													</li>
													<li class="list-group-item">
														<a href="<?= base_url('Profile/Peraturan') ?>">Peraturan
															Desa</a>
													</li>
													<li class="list-group-item">
														<a href="http://kumpulrejo.desa.id/public/menu/hubungikami">Hubungi
															Kami</a>
													</li>
												</ul>
											</div>
										</li>
										<!-- Akhiran -->
										<li class="list-group-item" class="drop-menu-02">

											<span>
												<a href="javascript:void(0)" onclick="dropMenu02()">
													<i class="nc-icon nc-book-bookmark"></i>
													Data Desa
												</a>

												<span style="float:right">
													<a href="javascript:void(0)" onclick="reMenu02()"
														class="display-pop-up-02" id="re-drop-02">
														<i class="bi bi-eject-fill"></i>
													</a>
												</span>
											</span>

											<div id="display-pop-up-02" class="display-pop-up-02">
												<ul class="list-group list-group-flush">
													<li class="list-group-item">
														<a href="<?= base_url('Pendidikan') ?>">Kependidikan</a>
													</li>
													<li class="list-group-item">
														<a href="<?= base_url('Kependudukan') ?>">Kependudukan</a>
													</li>
													<li class="list-group-item">
														<a href="<?= base_url('Profile/Keudes') ?>">Keuangan Desa</a>
													</li>
													<li class="list-group-item">
														<a
															href=" http://kumpulrejo.desa.id/public/menu/siskeudes">Siskeudes</a>
													</li>
													<li class="list-group-item">
														<a href="http://kumpulrejo.desa.id/public/menu/hargapokokdesa">Harga
															Pokok</a>
													</li>
													<li class="list-group-item">
														<a
															href="<?= base_url('Profile/Kesejahteraan') ?>">Kemiskinan</a>
													</li>

												</ul>
											</div>

										</li>
										<!-- Akhiran -->
										<li class="list-group-item" class="drop-menu-03">

											<span>
												<a href="javascript:void(0)" onclick="dropMenu03()">
													<i class="bi bi-bank2"></i>
													Kabar Desa
												</a>

												<span style="float:right">
													<a href="javascript:void(0)" onclick="reMenu03()"
														class="display-pop-up-03" id="re-drop-03">
														<i class="bi bi-eject-fill"></i>
													</a>
												</span>
											</span>

											<div id="display-pop-up-03" class="display-pop-up-03">
												<ul class="list-group list-group-flush">
													<li class="list-group-item">
														<a href="<?= base_url('') ?>">Berita</a>
													</li>
													<li class="list-group-item">
														<a href="<?= base_url('Potensi') ?>">Kegiatan</a>
													</li>
													<li class="list-group-item">
														<a
															href="http://kumpulrejo.desa.id/public/menu/agenda">agenda</a>
													</li>

												</ul>
											</div>

										</li>
										<!-- Akhiran -->
										<li class="list-group-item" class="drop-menu-04">

											<span>
												<a href="javascript:void(0)" onclick="dropMenu04()">
													<i class="bi bi-bar-chart-fill"></i>
													Potensi
												</a>

												<span style="float:right">
													<a href="javascript:void(0)" onclick="reMenu04()"
														class="display-pop-up-04" id="re-drop-04">
														<i class="bi bi-eject-fill"></i>
													</a>
												</span>
											</span>

											<div id="display-pop-up-04" class="display-pop-up-04">
												<ul class="list-group list-group-flush">
													<li class="list-group-item">
														<a href="http://kumpulrejo.desa.id/public/menu/bid">Bursa
															Inovasi Desa</a>
													</li>
													<li class="list-group-item">
														<a href="<?= base_url('Potensi') ?>">Pontesi desa</a>
													</li>
													<li class="list-group-item">
														<a
															href="http://kumpulrejo.desa.id/public/menu/bumdesdesa">Bumdes</a>
													</li>

												</ul>
											</div>

										</li>
										<!-- akhiran -->
										<li class="list-group-item">
											<a href="">
													<i class="bi bi-archive-fill"></i>
												<a href="http://kumpulrejo.desa.id/public/menu/petanda">Petanda desa</a>

											</a>
										</li>
										<!-- Akhiran -->
										<li class="list-group-item">
											<a href="">
												<i class="bi bi-boombox-fill"></i>
												<a href="http://kumpulrejo.desa.id/public/menu/petanda">Wisata</a>
											</a>
										</li>
										<!-- Akhiran -->
										<li class="list-group-item">
											<i class="bi bi-door-open-fill"></i>
											<a
												href="https://dokar.kendalkab.go.id/dashbord/public_dashbord">DOKAR-Dashboard</a>
										</li>
										<!-- Akhiran -->
										<li class="list-group-item">
											<i class="nc-icon nc-planet"></i>
											<a href="https://corona.kendalkab.go.id/">COVID-19</a>

										</li>
									</ul>

								</div>
							</div>
						</div>
					</div>
					<a class="navbar-brand" href="javascript:;"></a>
				</div>
				<!--  -->
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation"
					aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-bar navbar-kebab"></span>
					<span class="navbar-toggler-bar navbar-kebab"></span>
					<span class="navbar-toggler-bar navbar-kebab"></span>
				</button>
				<div class="collapse navbar-collapse justify-content-end" id="navigation">
					<form>
						<div class="input-group no-border">
							<input type="text" value="" class="form-control" placeholder="Search...">
							<div class="input-group-append">
								<div class="input-group-text">
									<i class="nc-icon nc-zoom-split"></i>
								</div>
							</div>
						</div>
					</form>
					<ul class="navbar-nav">
						<li class="nav-item">
							<a class="nav-link btn-rotate" href="http://kumpulrejo.desa.id/dashbord/login" title="Login">
								<i class="nc-icon nc-circle-10"></i>
								<p>
									<span class="d-lg-none d-md-block"
										href="http://kumpulrejo.desa.id/dashbord/login">Login</span>
								</p>
							</a>
						</li>


				</div>
		</nav>
		<!-- End Navbar -->

		<!-- content -->
		<div class="content">
			<?php echo $contents ?>
			<!-- Footer start -->
			<div class="foter-set">
				<div class="footer-main-flex">
					<div>
						<img src="http://kumpulrejo.desa.id/upload/umum/Logo.png" class="logo-responsive"
							alt="Desa KumpulRejo">
						<br>
						<span class='span-for-mobile'>
							<b>Desa KUMPULREJO
								Kec. PATEBON , Kab. Kendal</b>
							Jln. Raden Patah KM 3.5 Desa Kumpulrejo Kecamatan Patebon Kabupaten Kendal
							+6281325924983 +6281938635777
							kumpulrejo.patebonkendal@gmail.com
						</span>
					</div>

					<div class='span-for-mobile-on'>
						<b>Desa KUMPULREJO
							Kec. PATEBON , Kab. Kendal</b>
						Jln. Raden Patah KM 3.5 Desa Kumpulrejo Kecamatan Patebon Kabupaten Kendal
						+6281325924983 +6281938635777
						kumpulrejo.patebonkendal@gmail.com
					</div>

					<div>
						<b class='footer-title'>Pengunjung</b> <br>
						TOTAL <br>
						0000339300 <br>
						BULAN INI <br>
						0000010235 <br>
						ONLINE <br>
						0006 <br>
					</div>

					<div>
						<b class='footer-title'>Our Social Media</b> <br>
						<a href=""><i class="bi bi-facebook"></i> Facebook</a> <br>
						<a href=""><i class="bi bi-twitter"></i> Twitter</a> <br>
						<a href=""><i class="bi bi-instagram"></i> Instagram</a> <br>
						<a href=""><i class="bi bi-youtube"></i>youtube</a> <br>
						<a href=""><i class="bi bi-book-half"></i>Blog</a> <br>
					</div>

					<div>
						<!-- <h3></h3> -->
						<b class='footer-title'>Tautan Terkait</b>
						<br>
						<a href=""><img src="https://www.lapor.go.id/themes/lapor/assets/images/logo.png" alt=""
								style="color : #fff; width: 46px;"> Lapor.go.id</a> <br>
						<a href="http://www.kendalkab.go.id" target="_blank">
							&nbsp; <img src="https://www.kendalkab.go.id/images/dashboard/logo.png" alt=""
								style="color : #fff; width: 25px;">&nbsp;&nbsp;&nbsp;KendalKab</a> <br>
						<a href="http://www.diskominfo.kendalkab.go.id" target="_blank">
							<img src="http://kumpulrejo.desa.id/assets/images/kominfo.png" alt=""
								style="color : #fff; width: 35px;">&nbsp;&nbsp;&nbsp;Diskominfo</a> <br>
						<a href="http://kecpatebon.kendalkab.go.id/" target="_blank">
							&nbsp; <img src="https://www.kendalkab.go.id/images/dashboard/logo.png" alt=""
								style="color : #fff; width: 25px;">&nbsp;&nbsp;&nbsp;Patebon</a> <br>
					</div>
				</div>
			</div>
			<!-- footer end -->
		</div>


		<!--   Core JS Files   -->
		<script src="<?= base_url('assets/js/core/jquery.min.js') ?>"></script>
		<script src="<?= base_url('assets/js/core/popper.min.js') ?>"></script>
		<script src="<?= base_url('assets/js/core/bootstrap.min.js') ?>"></script>
		<script src="<?= base_url('assets/js/plugins/perfect-scrollbar.jquery.min.js') ?>"></script>

		<!--  Google Maps Plugin    -->
		<script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
		<!-- Chart JS -->
		<script src="<?= base_url('assets/js/plugins/chartjs.min.js') ?>"></script>
		<!--  Notifications Plugin    -->
		<script src="<?= base_url('assets/js/plugins/bootstrap-notify.js') ?>"></script>
		<!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
		<script src="<?= base_url('assets/js/paper-dashboard.min.js?v=2.0.1') ?>" type="text/javascript"></script>

		<!-- ADDS Javascript -->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

		<!-- Bootstrap -->
		<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
			integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous">
		</script>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
			integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous">
		</script>

		<!-- Individual Script -->
		<script src="<?= base_url('assets/js/fiscript.js') ?>"></script>
		<script src="<?= base_url('assets/js/Tombol.js') ?>"></script>

</body>
</html>
