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
    <title>Edit</title>
    <link rel="shortcut icon" href="Pict/0.jpeg" type="image/x-icon"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

</head>

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
                                <!-- <a class="nav-link" href="Home.php"> 
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
                            </li>   -->
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


    <main>
        <h1 class="text-center">Edit Data</h1>
        <hr>
        <form action="edit_proses.php" method="POST" class="container">
            <div class="row mb-3">
                <label for="staticEmail" class="col-sm-2 col-form-label">NIK</label>
                <div class="col-sm-10">
                    <?php
                    include 'connect.php';
                    $nik = $_GET['id'];

                    $sql    = "SELECT nik FROM tbbooking where nik = '$nik'";
                    $query    = mysqli_query($connect, $sql);

                    while ($data = mysqli_fetch_array($query)) {
                    ?>
                        <input type="text" class="form-control" id="staticEmail" value="<?= $data['nik'] ?>" disabled>
                        <input type="hidden" value="<?= $data['nik'] ?>" name="nik">
                    <?php } ?>
                </div>
            </div>
            <div class="row mb-3">
                <label for="inputPassword" class="col-sm-2 col-form-label">Nama</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputPassword" name="nama">
                </div>
            </div>

            <div class="row mb-3">
                <label for="inputPassword" class="col-sm-2 col-form-label">Alamat</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputPassword" name="alamat">
                </div>
            </div>

            <div class="row mb-3">
                <label for="inputPassword" class="col-sm-2 col-form-label">Instagram</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputPassword" name="instagram">
                </div>
            </div>

            <div class="row mb-3">
                <label for="inputPassword" class="col-sm-2 col-form-label">No. Handphone</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputPassword" name="hp">
                </div>
            </div>

            <div class="row mb-3">
                <label for="inputPassword" class="col-sm-2 col-form-label">Tanggal</label>
                <div class="col-sm-10">
                    <input type="date" class="form-control" id="inputPassword" name="tanggal" placeholder="Tanggal">
                </div>
            </div>

            <div class="row mb-3">
                <label for="inputPassword" class="col-sm-2 col-form-label">Member</label>
                <div class="col-sm-10">
                    <div>
                        <input class="form-check-input" type="radio" name="member" id="gridRadios1" value="Member">
                        <label class="form-check-label" for="gridRadios1"> Member </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="member" id="gridRadios2" value="Tidak member">
                        <label class="form-check-label" for="gridRadios1"> Tidak Member </label>
                    </div>
                </div>
            </div>

            <div class="row mb-3">
                <label for="inputPassword" class="col-sm-2 col-form-label">Perawatan</label>
                <div class="col-sm-10">
                    <td>
                        <select class=select name=perawatan id="produk">
                        <option value="" disabled selected>Choose your treatment</option>
                            <option value="Beauty Whitening Rejuve">Beauty Whitening Rejuve</option>
                            <option value="Beauty Acne">Beauty Acne </option>
                            <option value="Beauty Acne dan Whitening">Beauty Acne dan Whitening</option>
                            <option value="Beauty Laser Acne">Beauty Laser Acne</option>
                            <option value="Beauty Laser Whitening">Beauty Laser Whitening</option>
                        </select>
                    </td>
                </div>
            </div>

            <div class="row mb-3">
                <label for="inputPassword" class="col-sm-2 col-form-label">Diskon</label>
                <div class="col-sm-10">
                    <td>
                        <label for="diskon" id="diskon"></label>
                    </td>
                </div>
            </div>




            <div class="row">
                <div class="col-sm-2"></div> <!-- Kolom kosong untuk menyesuaikan posisi tombol -->
                <div class="col-auto">
                    <button type="submit" class="btn btn-primary" style="font-weight: bold; font-size: 12px;">Simpan</button>
                </div>
                <div class="col-auto">
                    <a href="tampil.php" class="btn btn-warning text-white" style="font-weight: bold; font-size: 12px;">Kembali</a>
                </div>

            </div>

    </main>

    <script>
        var potongan;
        var diskon;
        var tampilDiskon = document.getElementById('diskon');
        var selectProduk = document.getElementById('produk');
        selectProduk.addEventListener('change', function() {
            console.log('test')
            var radioMember = document.getElementById('gridRadios1').checked ? "Member" : "Tidak Member";
            if (selectProduk.value == "Beauty Whitening Rejuve") {
                if (radioMember == "Member") {
                    potongan = 500000 * 0.25;
                } else {
                    potongan = 500000;
                }

                
            } else if (selectProduk.value == "Beauty Acne") {
                if (radioMember == "Member") {
                    potongan = 450000 * 0.25;
                } else {
                    potongan = 450000;
                }

                
            } else if (selectProduk.value == "Beauty Acne dan Whitening") {
                if (radioMember == "Member") {
                    potongan = 600000 * 0.25;
                } else {
                    potongan = 60000;
                }

                
            } else if (selectProduk.value == "Beauty Laser Acne") {
                if (radioMember == "Member") {
                    potongan = 400000 * 0.25;
                } else {
                    potongan = 400000;
                }

                
            } else if (selectProduk.value == "Beauty Laser Whitening") {
                if (radioMember == "Member") {
                    potongan = 350000 * 0.25;
                } else {
                    potongan = 350000;
                }

                
            }

            tampilDiskon.innerHTML = 'Rp. ' + potongan;
        });

        function myalert() {
            alert("PESANAN ANDA BERHASIL\nSilahkan tunggu konfirmasi melalui No.Handphone");
        }
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>