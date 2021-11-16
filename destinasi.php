<!DOCTYPE html>
<html lang="en">

<head>

    <!-- Meta Including Start -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- End of Meta Including -->

    <!-- Title Start -->
    <title>Destinasi | Travely</title>
    <!-- End of Title -->

    <!-- CSS and JavaScript Including File -->
    <link rel="icon" type="image/png" href="assets/logo/travelinaryIcon.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Lora:wght@500;600;700&family=Nunito:wght@400;600;700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="assets/lib/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/lib/owlcarousel/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/lib/owlcarousel/owl.theme.default.min.css">
    <link rel="stylesheet" href="assets/lib/select2/css/select2.min.css">
    <!-- <link rel="stylesheet" href="assets/font/font.css"> -->
    <script src="assets/js/fontawesome.js"></script>
    <!-- End of Including File -->

</head>

<body>
    <input type="checkbox" id="check"></input>
    <nav class="navbar navbar-expand-lg navbar-light">
		<a class="navbar-brand" href="index.php">
			<img src="assets/logo/travelinary.png" height="50" alt="Logo Travelinary">
		</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
		  <span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarNavDropdown">
		  <ul class="navbar-nav mx-auto">
			<li class="nav-item">
				<a class="nav-link nunitoSemiBold" href="index.php">Beranda</a>
			</li>
			<li class="nav-item active">
				<a class="nav-link nunitoSemiBold" href="destinasi.php">
				  Destinasi
				</a>
			  </li>
			<li class="nav-item">
				<a class="nav-link nunitoSemiBold" href="event.php">Event</a>
			</li>
			<li class="nav-item">
				<a class="nav-link nunitoSemiBold" href="#contact">Kontak</a>
			</li>
		  </ul>
          <div class="nonAuth d-none">
			<a href="Login.php" class="nunitoSemiBold mr-3">Masuk</a>
			<a href="register.php" class="btn btn-pill px-4">Daftar</a>
		  </div>
		<div class="auth avatar d-none">
			<div class="d-flex align-items-center">
				<div class="col-12 pl-0">
					<a
					class="nunitoRegular align-items-center d-flex dropdown-toggle"
					data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					<img src="assets/icon/Photo Profile.svg" width="40" alt="">
					<h5 class="nunitoSemiBold ml-2 my-0">Apin</h5> <i class="fas ml-1 fa-angle-down"></i>
				</a>
				<div class="dropdown-menu">
					<a class="dropdown-item" href="profileWisata.php">
						<i class="fas mr-2 fa-user"></i>
						Profile</a>
					<a class="dropdown-item logout" href="javascript:void(0)">
						<i class="fas mr-2 fa-sign-out-alt"></i>
						Logout</a>
				</div>
				</div>
			</div>
		</div>
		</div>
	  </nav>

    <section id="category">

        <div class="container">
            <h3 class="loraBold d-inline-block">Kategori</h3>
            <div class="categoryButton mt-3 scrollHorizontal">
                <a href="destinasi.php" class="btn mr-2 px-4 btn-pill">Semua</a>
                <a href="wisata.php" class="btn mr-2 px-4 btn-pill-disable">Wisata</a>
                <a href="kuliner.php" class="btn mx-2 px-4 btn-pill-disable">Kuliner</a>
            </div>
            <h3 class="loraBold d-inline-block mt-4">Tampilkan</h3>
            <div class="filterButton">
                <div class="btn-group pl-0 col-12 row">
                    <div class="col-md-4 col-lg-3 col-12 mt-3">
                        <button type="button"
                        class="btn btn-gray px-4 nunitoRegular align-items-center d-flex dropdown-toggle"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Rekomendasi <i class="fas ml-2 fa-angle-down"></i>
                    </button>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="#">
                            <i class="fas mr-2 fa-chart-bar"></i>
                            Rekomendasi</a>
                        <a class="dropdown-item" href="#">
                            <i class="fas mr-2 fa-heart"></i>
                            Populer</a>
                        <a class="dropdown-item" href="#">
                            <i class="fas mr-2 fa-map-marker-alt"></i>
                            Terdekat</a>
                    </div>
                    </div>
                    <div class="col-md-6 col-lg-4 col-12 mt-3">
                    <div class="searchPindev">
                        <input type="text" placeholder="Cari Sekarang">
                    </div>
                    </div>
                    <div class="col-md-2 col-lg-2 col-12 mt-3">
                    <div class="btn-group mr-2">
                        <a href="javascript:void(0)" class="btn btn-gray filterAction px-4 nunitoRegular align-items-center d-flex">
                            <i class="fas fa-filter mr-2"></i> Filter</i>
                        </a>
                    </div>
                    </div>
                </div>

               
            </div>
            <div class="row filterContent">
                <div class="content col-12 mt-3 col-md-4 col-lg-3 align-self-end">
                    <p class="nunitoSemiBold mb-1">Provinsi</p>
                <select class="js-example-basic-single" name="state">
                    <option value="Jawa Timur">Jawa Timur</option>
                    <option value="Jawa Barat">Jawa Barat</option>
                    <option value="Jawa Tengah">Jawa Tengah</option>
                    <option value="Sulawesi Tengah">Sulawesi Tengah</option>
                    <option value="Sulawesi Utara">Sulawesi Utara</option>
                    <option value="Sulawesi Barat">Sulawesi Barat</option>
                    <option value="Sulawesi Selatan">Sulawesi Selatan</option>
                    <option value="Kalimantan Timur">Kalimantan Timur</option>
                    <option value="Kalimantan Selatan">Kalimantan Selatan</option>
                    <option value="Kalimantan Tengah">Kalimantan Tengah</option>
                    <option value="Kalimantan Barat">Kalimantan Barat</option>
                  </select>
                </div>
                <div class="content col-12 mt-3 col-md-4 col-lg-4 align-self-end">
                    <p class="nunitoSemiBold mb-1">Kota</p>
                    <select class="js-example-basic-multiple" style="width:100%;" name="states[]" multiple="multiple">
                        <option value="Mojokerto">Mojokerto</option>
                        <option value="Surabaya">Surabaya</option>
                        <option value="Malang">Malang</option>
                        <option value="Probolinggo">Probolinggo</option>
                        <option value="Kediri">Kediri</option>
                        <option value="Blitar">Blitar</option>
                    </select>
                </div>
                <div class="content col-12 mt-3 col-md-2 col-lg-2 align-self-end">
                <a href="#" class="btn btn-pill px-4 ">Cari</a>    

                </div>
            </div>
        </div>
    </section>
    <section id="categoryCard">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-3 col-md-4 my-2">
                    <a href="Destinasi/Wisata/candi-tikus.php">
                        <div class="card">
                            <div class="love">
                                <img src="assets/img/wisata/candi-tikus.jpg" alt="candi tikus">
                                
                            </div>
                            <div class="desc px-3 py-2">
                                <h4 class="mb-1 nunitoBold">Candi Tikus</h4>
                                <p class="mb-1"><i class="fa fa-map-marker"></i>Mojokerto, Jawa Timur</p>
                                <p class="price mb-1">Rp. 16.000</p>
                                <div class="d-flex align-self-center">
                                    <img src="assets/icon/Stars.svg" height="23" alt="">
                                    <p class="totalComments">(149)</p>
                                </div>
                            </div>

                        </div>
                    </a>
                </div>
                <div class="col-12 col-lg-3 col-md-4 my-2">
                    <a href="Destinasi/Kuliner/gudeg.php">
                        <div class="card">
                            <div class="love">
                                <img src="assets/img/wisata/gudeg1.jpeg" alt="candi tikus">
                                
                            </div>
                            <div class="desc px-3 py-2">
                                <h4 class="mb-1 nunitoBold">Gudeg</h4>
                                <p class="mb-1"><i class="fa fa-map-marker"></i>D.I Yogyakarta</p>
                                <p class="price mb-1">Rp 10,000 - 15.000</p>
                                <div class="d-flex align-self-center">
                                    <img src="assets/icon/Stars.svg" height="23" alt="">
                                    <p class="totalComments">(149)</p>
                                </div>
                            </div>

                        </div>
                    </a>
                </div>
                <div class="col-12 col-lg-3 col-md-4 my-2">
                    <a href="Destinasi/Wisata/danau-toba.php">
                        <div class="card">
                            <div class="love">
                                <img src="assets/img/wisata/danau-toba.jpeg" alt="candi tikus">
                                
                            </div>
                            <div class="desc px-3 py-2">
                                <h4 class="mb-1 nunitoBold">Danau Toba</h4>
                                <p class="mb-1"><i class="fa fa-map-marker"></i>Sumatera Utara</p>
                                <p class="price mb-1">Rp 10,000</p>
                                <div class="d-flex align-self-center">
                                    <img src="assets/icon/Stars.svg" height="23" alt="">
                                    <p class="totalComments">(149)</p>
                                </div>
                            </div>

                        </div>
                    </a>
                </div>
                <div class="col-12 col-lg-3 col-md-4 my-2">
                    <a href="Destinasi/Kuliner/rendang.php">
                        <div class="card">
                            <div class="love">
                                <img src="assets/img/wisata/rendang.jpeg" alt="candi tikus">
                                
                            </div>
                            <div class="desc px-3 py-2">
                                <h4 class="mb-1 nunitoBold">Rendang</h4>
                                <p class="mb-1"><i class="fa fa-map-marker"></i>Sumatera Barat</p>
                                <p class="price mb-1">Rp 10,000 - 15,000</p>
                                <div class="d-flex align-self-center">
                                    <img src="assets/icon/Stars.svg" height="23" alt="">
                                    <p class="totalComments">(149)</p>
                                </div>
                            </div>

                        </div>
                    </a>
                </div>
                <div class="col-12 col-lg-3 col-md-4 my-2">
                    <a href="Destinasi/Wisata/candi-tikus.php">
                        <div class="card">
                            <div class="love">
                                <img src="assets/img/wisata/candi-tikus.jpg" alt="candi tikus">
                                
                            </div>
                            <div class="desc px-3 py-2">
                                <h4 class="mb-1 nunitoBold">Candi Tikus</h4>
                                <p class="mb-1"><i class="fa fa-map-marker"></i>Mojokerto, Jawa Timur</p>
                                <p class="price mb-1">Rp 10,000</p>
                                <div class="d-flex align-self-center">
                                    <img src="assets/icon/Stars.svg" height="23" alt="">
                                    <p class="totalComments">(149)</p>
                                </div>
                            </div>

                        </div>
                    </a>
                </div>
                <div class="col-12 col-lg-3 col-md-4 my-2">
                    <a href="Destinasi/Kuliner/gudeg.php">
                        <div class="card">
                            <div class="love">
                                <img src="assets/img/wisata/gudeg1.jpeg" alt="candi tikus">
                                
                            </div>
                            <div class="desc px-3 py-2">
                                <h4 class="mb-1 nunitoBold">Gudeg</h4>
                                <p class="mb-1"><i class="fa fa-map-marker"></i>D.I Yogyakarta</p>
                                <p class="price mb-1">Rp 10,000 - 15,000</p>
                                <div class="d-flex align-self-center">
                                    <img src="assets/icon/Stars.svg" height="23" alt="">
                                    <p class="totalComments">(149)</p>
                                </div>
                            </div>

                        </div>
                    </a>
                </div>
                <div class="col-12 col-lg-3 col-md-4 my-2">
                    <a href="Destinasi/Wisata/danau-toba.php">
                        <div class="card">
                            <div class="love">
                                <img src="assets/img/wisata/danau-toba.jpeg" alt="candi tikus">
                                
                            </div>
                            <div class="desc px-3 py-2">
                                <h4 class="mb-1 nunitoBold">Danau Toba</h4>
                                <p class="mb-1"><i class="fa fa-map-marker"></i>Sumatera Utara</p>
                                <p class="price mb-1">Rp 10,000</p>
                                <div class="d-flex align-self-center">
                                    <img src="assets/icon/Stars.svg" height="23" alt="">
                                    <p class="totalComments">(149)</p>
                                </div>
                            </div>

                        </div>
                    </a>
                </div>
                <div class="col-12 col-lg-3 col-md-4 my-2">
                    <a href="Destinasi/Kuliner/rendang.php">
                        <div class="card">
                            <div class="love">
                                <img src="assets/img/wisata/rendang.jpeg" alt="candi tikus">
                                
                            </div>
                            <div class="desc px-3 py-2">
                                <h4 class="mb-1 nunitoBold">Rendang</h4>
                                <p class="mb-1"><i class="fa fa-map-marker"></i>Sumatera Barat</p>
                                <p class="price mb-1">Rp 10,000 - 15,000</p>
                                <div class="d-flex align-self-center">
                                    <img src="assets/icon/Stars.svg" height="23" alt="">
                                    <p class="totalComments">(149)</p>
                                </div>
                            </div>

                        </div>
                    </a>
                </div>
                

            </div>
        </div>

        <div class="row justify-content-center d-flex mt-4 mb-5">
            <a href="#" class="btn btn-pill-large px-5">Lebih Banyak</a>
        </div>

    </section>

    <!-- Footer -->
    <div class="scroll" id="contact"></div>
    <footer class="page-footer font-small unique-color-dark">
		<!-- Contact -->
		<div id="footerQ" style="padding: 10px; color: white;">
			<div class="container text-md-left mt-5">


				<div class="row mt-3">

					<div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
						<h6 class="font-weight-bold">Apa Itu Travelinary ?</h6>
						<hr class="accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px; background-color: white;">
						<p class="footer-text">Tempat untuk mencari Wisata, Kuliner maupun Event yang ada di indonesia, tidak hanya itu selain mencari kamu juga bisa mempublish Wisata, Kuliner atau Event kamu</p>
					</div>
					<div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">

						<h6 class="text-uppercase font-weight-bold">Company</h6>
						<hr class="accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px; background-color: white;">
						<p class="footer-text">
							<a href="#" style="color: white;">Term Of Service</a>
						</p>
						<p class="footer-text">
							<a href="#" style="color: white;">Privacy & Policy</a>
						</p>
					</div>
					<div class="col-md-3 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">

						<h6 class="text-uppercase font-weight-bold">Kontak</h6>
						<hr class="accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px; background-color: white;">
						<p class="footer-text">
							<i class="fa fa-facebook mr-3"></i> Travelinary</p>
						<p class="footer-text">
							<i class="fa fa-instagram mr-3"></i> Travelinary</p>
						<p class="footer-text">
							<i class="fa fa-envelope mr-3"></i> Travelinary@gmail.com</p>

					</div>
					<div class="col-md-3 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">

						<h6 class="text-uppercase font-weight-bold">Support Us</h6>
						<hr class="accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px; background-color: white;">
						<div class="row">
							<div class="col-2 col-md-1"></div>
							<div class="col-4 col-md-5">
								<img src="assets/logo/unesa.jpg" class="logo-unesa">
							</div>
							<div class="col-4 col-md-5">
								<img src="assets/logo/HIMTI UNESA.png" class="logo-ic">
							</div>
							<div class="col-2 col-md-1"></div>

						</div>

					</div>

				</div>

			</div>
		</div>
		<!-- End Contact -->

		<!-- Copyright -->
			<div class="footer-copyright text-center">
				<p class="nunitoRegular">© 2021 Copyright Akira Team</p> 
			</div>
		<!-- End Copyright -->

	</footer>
    <!-- End Footer -->

    <!-- Back to top -->
    <button id="btnTop" class="btnTop" title="Go to top"><i class="up"></i>TOP</button>
    <!-- End of Back to top -->

    <!-- Including JavaScript File Start -->
    <script type="text/javascript" src="assets/js/jquery.min.js"></script>
     <script type="text/javascript" src="assets/js/popper.min.js"></script>
    <script type="text/javascript" src="assets/lib/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="assets/lib/select2/js/select2.min.js"></script>
    <script src="assets/js/script.js"></script>
    <script>

        // select 2
        $(document).ready(function() {
          $('.js-example-basic-multiple').select2();
          $('.js-example-basic-single').select2();

          let aman = localStorage.getItem('authLogin');
	if(aman){
		$('.nonAuth').addClass('d-none');
		$('.auth').removeClass('d-none');
	}else{
		$('.nonAuth').removeClass('d-none');
		$('.auth').addClass('d-none');
	}

	$('.logout').click(function(){
		localStorage.removeItem('authLogin');
		window.location.href = 'Login.php';
	})

           $('#categoryCard .card').each(function(i){
            setTimeout(function(){
                $('#categoryCard .card').eq(i).addClass('bottomToTop');
            }, 300 * i);
        });
      });
        // end select 2
      
        // filter
        $('.filterAction').click(function(){
          $('.filterContent').toggleClass('filterAnimation');
        })
        // end filter
          </script>
    <!-- End of Including JavaScript File -->
</body>

</html>
