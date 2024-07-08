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
    <title>Output</title>
    <link rel="shortcut icon" href="Pict/0.jpeg" type="image/x-icon"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

</head>

<body class="bg-login">
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
                            <!-- <li class="nav-item">
                                <a class="nav-link" href="Home.php"> 
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
                                </a> -->
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
    <main>
        <br><br>
        <h1 class="text-center">Data Reservasi</h1>
        <hr>
        <a href="tambah.php" type="button" class="btn btn-info mb-3 text-white" style="font-weight: bold;">Tambah Data</a>
        <table class="table">
            <thead class="table-dark">
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">NIK</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Alamat</th>
                    <th scope="col">Instagram</th>
                    <th scope="col">No. Handphone</th>
                    <th scope="col">Tanggal</th>
                    <th scope="col">Member</th>
                    <th scope="col">Perawatan</th>
                    <th scope="col">Total</th>
                    <th scope="col" colspan="2">Action</th>
                </tr>
            </thead>
            <?php
            include 'connect.php';
            $sql = "SELECT * FROM tbbooking";
            $query = mysqli_query($connect, $sql);
            $i = 1;
            while ($data = mysqli_fetch_array($query)) {
            ?>
                <tbody>
                    <tr>
                        <td scope="row"><?= $i ?></td>
                        <td><?= $data['nik'] ?></td>
                        <td><?= $data['nama'] ?></td>
                        <td><?= $data['alamat'] ?></td>
                        <td><?= $data['instagram'] ?></td>
                        <td><?= $data['hp'] ?></td>
                        <td><?= $data['tanggal'] ?></td>
                        <td><?= $data['member'] ?></td>
                        <td><?= $data['perawatan'] ?></td>
                        <td><?= $data['diskon'] ?></td>
                        <td><a href="edit.php?id=<?= $data['nik'] ?>" class="btn btn-success">Edit</a></td>
                        <td><a href="hapus.php?id=<?= $data['nik'] ?>" class="btn btn-danger">Delete</a></td>
                    </tr>
                </tbody>
            <?php $i += 1;
            } ?>
        </table>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>