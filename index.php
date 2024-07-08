<?php
session_start();
if (empty($_SESSION['username'])) {
    header("location: login.php?message=belum_login");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="shortcut icon" href="Pict/0.jpeg" type="image/x-icon"/>
    <!-- Botrsap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,300;0,400;1,700&display=swap"
        rel="stylesheet">
    <!-- CSS -->
    <link rel="stylesheet" type="text/css" href="style1.css">

</head>

<!-- Navbar -->
<body class="bg-muted">
    <header>
        <nav class="navbar navbar-dark bg-dark fixed-top">
            <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="offcanvas offcanvas-start text-bg-dark" tabindex="-1" id="offcanvasDarkNavbar" aria-labelledby="offcanvasDarkNavbarLabel">
                    <div class="offcanvas-header">
                        <img src="Pict/0.jpeg" alt="logo" width="200px">
                        <h5 class="offcanvas-title" id="offcanvasDarkNavbarLabel" style="font-family: 'Poppins', sans-serif;">Beauty Salon</h5>
                        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body">
                        <?php
                        include 'connect.php';
                        $username = $_SESSION['username'];
                        $sql = "SELECT * FROM users WHERE username = '$username'";
                        $query = mysqli_query($connect, $sql);
                        while ($data = mysqli_fetch_array($query)) {
                        ?>
                            <div class="container">
                                <div class="row mb-3">
                                    <div class="col-auto text-white">
                                        <p class="text-muted">Welcome, </p>
                                        <p><?= $data['username'] ?></p>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                            <li class="nav-item">
                                <a class="nav-link" href="index.php"> 
                                <i class="bi bi-house-door"></i> Home 
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#section1">
                                <i class="bi bi-file-earmark-person-fill"></i> About
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#section2">
                                <i class="bi bi-bag-heart-fill"></i> Our Treatment
                                </a>
                            </li>  
                            <li class="fixed-bottom nav-item">
                                <a class="nav-link" href="logout.php"><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-x-octagon-fill" viewBox="0 0 16 16">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-left" viewBox="0 0 16 16">
                                            <path fill-rule="evenodd" d="M6 12.5a.5.5 0 0 0 .5.5h8a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 0-.5-.5h-8a.5.5 0 0 0-.5.5v2a.5.5 0 0 1-1 0v-2A1.5 1.5 0 0 1 6.5 2h8A1.5 1.5 0 0 1 16 3.5v9a1.5 1.5 0 0 1-1.5 1.5h-8A1.5 1.5 0 0 1 5 12.5v-2a.5.5 0 0 1 1 0v2z" />
                                            <path fill-rule="evenodd" d="M.146 8.354a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L1.707 7.5H10.5a.5.5 0 0 1 0 1H1.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3z" />
                                        </svg>
                                    </svg> LOGOUT</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
    </header>

    <div id="carouselExampleDark" class="carousel carousel-dark slide">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active" data-bs-interval="10000">
                <img src="Pict/slider1.jpg" class="d-block w-100" alt="slider1">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Beuty Salon</h5>
                    <p>"Aroma segar yang memikat, kecantikan dalam setiap hirupan."</p>
                </div>
            </div>
            <div class="carousel-item" data-bs-interval="2000">
                <img src="Pict/slider2.jpg" class="d-block w-100" alt="slider2">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Beuty salon</h5>
                    <p>"Serangkaian perawatan lengkap, langkah-langkah kecantikan tak tertandingi."</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="Pict/slider3.jpg" class="d-block w-100" alt="slider3">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Beuty salon</h5>
                    <p>"Kulit sehat yang bercahaya dengan formula revitalisasi."</p>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <div class="mainmenu">
    <section id="section1">
        <!-- ABOUT US -->
        <div class="bgabout">
            <div class="about p-5">
                <div class="shadow p-3 mt-5 bg-white rounded-3">
                    <h3 style="font-family: 'Poppins';">WHY Beuty Salon?</h3>
                    <div class="row row-cols-2">
                        <div class="col-lg-3"><img src="Pict/0.jpeg" width=100%></div>
                        <div class="col-lg-9">
                            <p align="justify">Kami percaya akan kesempurnaan dalam meningkatkan kualitas hidup. Karena prioritas kami adalah membuat Anda merasa lebih cantik dan percaya diri.
                                Untuk alasan inilah, kami menyajikan seni keindahan alami tingkat dunia, menggunakan bahan-bahan natural yang didukung oleh ilmu pengetahuan terbaru dengan biaya yang terjangkau.
                                Kami jamin Anda akan merasa sangat nyaman dan dimanjakan saat proses revitalisasi dan peremajaan berlangsung. Datang dan bergabunglah bersama kami! Dengan pengalaman 9 tahun dengan total 10 klinik adalah bukti bahwa Gloskin adalah klinik estetika terpercaya di Indonesia.
                                Memberi hasil yang nyata, didukung oleh produk berkualitas dan peralatan canggih yang terus mengikuti perkembangan teknologi.
                                Mengutamakan kenyamanan dan privasi pelanggan. Ruang tunggu nyaman, serta tidak sakit selama melakukan perawatan.
                        </div>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        </section>

        <div class="service" style="padding: 100px;">
        <section id="section2">
            <!-- OUR SERVICE -->
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="shadow p-5 bg-white rounded">

                        <h3 align=center>OUR Treatment</h3>
                            <div class="card-deck mb-4">
                            <div class="card" style="width: 10rem;">
                                <img src="Pict/Rawat7.jpg" class="card-img-top" alt="...">
                                <div class="card-body">
                                <h5 class="card-title">Beuty whitening rejuve</h5>
                                <p class="card-text">Beuty whitening rejuve adalah terapi sinar yang akan melewati lapisan terluar kulit (epidermis) dan menembus lapisan yang lebih dalam (dermis) dimana terdapat pembuluh darah, kolagen dan elastin.</p>
                                <a href="tambah.php" class="btn btn-outline-success">Book Now!</a>
                                </div>
                            </div>
                        
                            <div class="card" style="width: 18rem;">
                                <img src="Pict/Rawat3.jpg" class="card-img-top" alt="...">
                                <div class="card-body">
                                <h5 class="card-title">Beuty acne</h5>
                                <p class="card-text">Beuty Acne adalah terapi sinar yang akan melewati lapisan terluar kulit (epidermis) dan menembus lapisan yang lebih dalam (dermis) dimana terdapat pembuluh darah, kolagen dan elastin.</p>
                                <a href="tambah.php" class="btn btn-outline-success">Book Now!</a>
                                </div>
                            </div>
                            <div class="card" style="width: 18rem;">
                                <img src="Pict/rawat4.jpg" class="card-img-top" alt="...">
                                <div class="card-body">
                                <h5 class="card-title">Beuty Acne dan whitening</h5>
                                <p class="card-text">Beuty Acne dan Whitening adalah terapi sinar yang akan melewati lapisan terluar kulit (epidermis) dan menembus lapisan yang lebih dalam (dermis) dimana terdapat pembuluh darah, kolagen dan elastin.</p>
                                <a href="tambah.php" class="btn btn-outline-success">Book Now!</a>
                                </div>
                            </div>
                            </div>
                            <div class="card-deck">
                                <div class="card" style="width: 18rem;">
                                    <img src="Pict/Rawat5.jpg" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">Beuty laser Acne</h5>
                                        <p class="card-text">Laser bermanfaat untuk Meningkatkan produksi kolagen untuk mengurangi kerutan dan jaringan parut di wajah. Meningkatkan sirkulasi darah di area sekitar wajah. Mengurangi peradangan baik karena jerawat atau masalah lain di wajah.</p>
                                        <a href="tambah.php" class="btn btn-outline-success">Book Now!</a>
                                    </div>
                                </div>
                                <div class="card" style="width: 18rem;">
                                    <img src="Pict/Rawat6.jpg" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">Laser Whitening</h5>
                                        <p class="card-text">Laser bermanfaat untuk Meningkatkan produksi kolagen untuk mengurangi kerutan dan jaringan parut di wajah. Meningkatkan sirkulasi darah di area sekitar wajah. Mengurangi peradangan baik karena jerawat atau masalah lain di wajah.</p>
                                        <a href="tambah.php" class="btn btn-outline-success">Book Now!</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </section>
        </div>
        <!-- AKHIR OUR PRODUCTS -->
        <!-- FOOTER -->
        <div class="footer shadow-lg p-5 bg-white rounded">
            <h3 align=center>CONTACT US</h3>
            <p align=center>Kami siap melayani dan membantu dengan senang hati atas pertanyaan, permintaan serta reservasi untuk treatment Anda di Beuty Salon .</p><br>
            <div class="row row-cols-2">
            <div class="col-lg-8">
                <h5>ALAMAT</h5>
                Jl. SETURAN RAYA No.1010 Rt.01 Rw.01, Sleman,Kota Yogyakarta, Jawa adalah koenci 696969 <br> <br>
                <h5>KONTAK</h5>
                Whatsapp  : (+62) 869696969696 <br>
                Instagram : @beutysalon.co.id <br><br>
                <h5>JAM OPERASIONAL</h5>
                Senin  : 09:00 - 19:00 <br>
                Selasa : 09:00 - 19:00 <br>
                Rabu   : 09:00 - 19:00 <br>
                Kamis  : 09:00 - 19:00 <br>
                Jumat  : 09:00 - 19:00 <br>
                Sabtu  : 09:00 - 19:00 <br>
                Minggu : Tutup <br>
            </div>
      <div class="col-lg-4"><div class="mapouter"><div class="gmap_canvas"><iframe
  width="600"
  height="450"
  frameborder="0"
  style="border:0"
  src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15859.646775256818!2d110.3840086!3d-7.7624634!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a59bb7d005d4b%3A0xcc15250bc2e20719!2sI'M%20Salon!5e0!3m2!1sen!2sid!4v1579775901111!5m2!1sen!2sid"
  allowfullscreen
></iframe><a href="https://fmovies-online.net">fmovies</a><br><style>.mapouter{position:relative;text-align:right;height:400px;width:400px;}</style><a href="https://www.embedgooglemap.net">how to add google map to my website</a><style>.gmap_canvas {overflow:hidden;background:none!important;height:400px;width:400px;}</style></div></div></div>
    </div>
  </div>
        <!-- Botsrap icon -->
        <path d="M8.707 1.5a1 1 0 0 0-1.414 0L.646 8.146a.5.5 0 0 0 .708.708L2 8.207V13.5A1.5 1.5 0 0 0 3.5 15h9a1.5 1.5 0 0 0 1.5-1.5V8.207l.646.647a.5.5 0 0 0 .708-.708L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293zM13 7.207V13.5a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5V7.207l5-5z"/>
        </svg>
        <!-- scrip bootstrap -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
        
</body>

</html>