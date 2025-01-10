<?php
    session_start();
    include 'konek.php';
    $level = "pemohon";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Surat Keterangan Kelurahan Sikumana</title>
	<meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
	<link rel="icon" href="./main/img/logo.png" type="image/x-icon"/>
    <!-- core CSS -->
    <link href="main/css/bootstrap.min.css" rel="stylesheet">
    <link href="main/css/font-awesome.min.css" rel="stylesheet">
    <link href="main/css/animate.min.css" rel="stylesheet">
    <link href="main/css/owl.carousel.css" rel="stylesheet">
    <link href="main/css/owl.transitions.css" rel="stylesheet">
    <link href="main/css/prettyPhoto.css" rel="stylesheet">
    <link href="main/css/main.css" rel="stylesheet">
    <link href="main/css/responsive.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
</head>
<!--/head-->

<body id="home" class="homepage">
   
    <header id="header">
        <nav id="main-menu" class="navbar navbar-default navbar-fixed-top" role="banner">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.php"><img src="main/img/logo.png" style="width: 75px;height: 75px; alt="logo"></a>
                </div>

                <div class="collapse navbar-collapse navbar-right">
                    <ul class="nav navbar-nav">
                        <li class="scroll active"><a href="#home">Beranda</a></li>
						<li class="scroll"><a href="#features">Visi & Misi</a></li>
                        <li class="scroll"><a href="#scroll">Jadwal</a></li>
                        <li class="scroll"><a href="#services">Informasi</a></li>
                        <li class="scroll"><a href="pegawai.php">Pegawai</a></li>
                        <li class="scroll"><a href="#get-in-touch">Lokasi</a></li>
                    </ul>
                </div>
            </div>
            <!--/.container-->
        </nav>
        <!--/nav-->
    </header>
    <!--/header-->

    <section id="cta2">
        <div class="container">
            <div class="text-center">
			
                <h2 class="wow fadeInUp" data-wow-duration="300ms" data-wow-delay="100ms">PELAYANAN SURAT KETERANGAN <br> KELURAHAN SIKUMANA</h2>
                <p class="wow fadeInUp" data-wow-duration="300ms" data-wow-delay="100ms">KLIK LOGIN UNTUK PEMBUATAN SURAT KETERANGAN
                <div class="row justify-content-center">
                    <div class="col-lg-12 text-center">
					
                        <div class="wow fadeIn" data-wow-duration="300ms" data-wow-delay="100ms"">
                           <!-- Button trigger modal -->
                           <a href="login.php" type="submit" class="btn btn-primary">Login</a>
                           <a href="register.php" type="submit" class="btn btn-primary">Daftar</a>
						   <img class="img-responsive wow fadeOut" src="main/img/office.png" style="width: 150px;margin-bottom: 20px;">
                        </div>
                    </div>
                </div>
             
            </div>
        </div>
    </section>
	
	<section id="features">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title text-center wow fadeInDown">Visi & Misi</h2>
				<div class="card border-1 rounded-0">
      <div class="card-body">
        <img src="main/img/banner.jpg" style="width: 100%;height: 400px; object-fit: cover;" alt="banner">
        <h4 class="mt-4">VISI & MISI Kelurahan Sikumana</h4>
        <p><strong>VISI</strong>: Terwujudnya masyarakat yang mandiri , bermartabat yang mampu membangun diri sendiri atas prakarsa  dan partisipasi masyarakat itu sendiri</p>
        <p><strong>MISI</strong>: </p>
        <ol type="1">
          <li>
            <p>Mewujudkan aparat Kelurahan Sikumana yang Profesional.</p>
          </li>
          <li>
            <p>Meningkatkan Kelembagaan Masyarakat Melalui wadah LPM, PKK, Karang Taruna dan Kelembagaan lainnya.</p>
          </li>
          <li>
            <p>Mewujudkan Masyaraka Sikumana Yang Mandiri.</p>
          </li>
          <li>
            <p>Mewujudkan Kepastian Status Atas Aset-Aset Pemerintah Kota Kupang.</p>
          </li>
        </ol>
      </div>
    </div>
            </div>
    <section id="scroll">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title text-center wow fadeInDown">Waktu Pelayanan</h2>
            </div>
            <div class="row">
                <div class="col-sm-6 wow fadeInLeft">
                    <img class="img-responsive" src="main/img/attendance.png" alt="">
                </div>
                <div class="col-sm-6">
                    <div class="media service-box wow fadeInRight">
                        <div class="pull-left">
                            <img src="main/img/clock.png" alt="">
                        </div>
                        <div class="media-body">
                            <h4 class="media-heading">SENIN - KAMIS</h4>
                            <p>07.00 - 16.30 WIB</p>
                        </div>
                    </div>

                    <div class="media service-box wow fadeInRight">
                        <div class="pull-left">
                            <img src="main/img/clock.png" alt="">
                        </div>
                        <div class="media-body">
                            <h4 class="media-heading">JUMAT</h4>
                            <p>07.30 - 15.30 WIB</p>
                        </div>
                    </div>

                    <div class="media service-box wow fadeInRight">
                        <div class="pull-left">
                            <img src="main/img/clock.png" alt="">
                        </div>
                        <div class="media-body">
                            <h4 class="media-heading">SABTU - MINGGU</h4>
                            <p>SONDE KERJA</p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <section id="services">
        <div class="container">

            <div class="section-header">
                <h2 class="section-title text-center wow fadeInDown">Prosedur Pembuatan Surat</h2>
            </div>

            <div class="row">
                <div class="features">
                    <div class="col-md-6 col-sm-6 wow fadeInUp" data-wow-duration="300ms" data-wow-delay="0ms">
                        <div class="media service-box">
                            <div class="pull-left">
                                <img src="main/img/number.png" alt="">
                            </div>
                            <div class="media-body">
                                <h4 class="media-heading">Login</h4>
                                <p>Pemohon Surat melakukan login, melalui halaman Login.
                                </p>
                            </div>
                        </div>
                    </div>
                    <!--/.col-md-4-->

                    <div class="col-md-6 col-sm-6 wow fadeInUp" data-wow-duration="300ms" data-wow-delay="100ms">
                        <div class="media service-box">
                            <div class="pull-left">
                                <img src="main/img/number2.png" alt="">
                            </div>
                            <div class="media-body">
                                <h4 class="media-heading">Menginput Data</h4>
                                <p>Input data yang sebelumnya melakukan Login dengan username dan password.</p>
                            </div>
                        </div>
                    </div>
                    <!--/.col-md-4-->

                    <div class="col-md-6 col-sm-6 wow fadeInUp" data-wow-duration="300ms" data-wow-delay="200ms">
                        <div class="media service-box">
                            <div class="pull-left">
                                <img src="main/img/number3.png" alt="">
                            </div>
                            <div class="media-body">
                                <h4 class="media-heading">Mengajukan Surat</h4>
                                <p>Setelah input data dengan lengkap dan benar, Pemohon memilih Surat yang mau direquest serta melengkapi data yang diminta, Kemudian dikirim dan menunggu persetujuan dari Lurah.</p>
                            </div>
                        </div>
                    </div>
                    <!--/.col-md-4-->

                    <div class="col-md-6 col-sm-6 wow fadeInUp" data-wow-duration="300ms" data-wow-delay="300ms">
                        <div class="media service-box">
                            <div class="pull-left">
                                <img src="main/img/number4.png" alt="">
                            </div>
                            <div class="media-body">
                                <h4 class="media-heading">Surat Disetujui</h4>
                                <p>Surat di setujui oleh Lurah, kemudian staf akan mencetak surat sesuai surat yang diajukan, pemohon juga dapat melakukan verifikasi surat apakah surat berasal asli dari Kelurahan atau tidak, dan pemohon dapat mengambil surat yang sudah dicetak di Kantor Kelurahan Sikumana.</p>
                            </div>
                        </div>
                    </div>
                    <!--/.col-md-4-->

                </div>
            </div>
            <!--/.row-->
        </div>
        <!--/.container-->
    </section>
    <!--/#services-->

    <section id="get-in-touch">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title text-center wow fadeInDown">LOKASI KANTOR KELURAHAN</h2>
            </div>
        </div>
    </section>
    <!--/#get-in-touch-->


    <section id="contact">
        <div>
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3926.7399068975624!2d123.6035815!3d-10.2017645!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2c569b39e4fc4d65%3A0x86dcf347b27d5cf3!2sKantor%20Lurah%20Sikumana!5e0!3m2!1sid!2sid!4v1683358341635!5m2!1sid!2sid" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </section>
    <!--/#bottom-->

    <footer id="footer">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    &copy; <?php echo date('Y');?> Betaldo
                </div>
                <div class="col-sm-6">
                    <ul class="social-icons">
                        <li><a href="https://www.instagram.com/allmendopratama/" target="_blank"><i class="fa fa-instagram"></i></a></li>
                        <li><a href="https://www.youtube.com/@allmendopratama1007" target="_blank"><i class="fa fa-youtube"></i></a></li>
                        <li><a href="https://github.com/fachrishofiyyuddin" target="_blank"><i class="fa fa-facebook"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    <!--/#footer-->

    <script src="main/js/jquery.js"></script>
    <script src="main/js/bootstrap.min.js"></script>
    <script src="http://maps.google.com/maps/api/js?sensor=true"></script>
    <script src="main/js/owl.carousel.min.js"></script>
    <script src="main/js/mousescroll.js"></script>
    <script src="main/js/smoothscroll.js"></script>
    <script src="main/js/jquery.prettyPhoto.js"></script>
    <script src="main/js/jquery.isotope.min.js"></script>
    <script src="main/js/jquery.inview.min.js"></script>
    <script src="main/js/wow.min.js"></script>
    <script src="main/js/main.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <!-- Swal -->
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9.15.2/dist/sweetalert2.all.min.js"></script>
	<!-- Optional: include a polyfill for ES6 Promises for IE11 -->
	<script src="https://cdn.jsdelivr.net/npm/promise-polyfill"></script>
</body>

</html>