<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="shortcut icon" href="Pict/0.jpeg" type="image/x-icon"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <!--CSS  -->
    <link rel="stylesheet" type="text/css" href="style1.css">
     <!-- Fonts -->
     <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,300;0,400;1,700&display=swap"
        rel="stylesheet">
</head>

<body class="bg-login">
<section class="position-absolute top-50 start-50 translate-middle bg-2 pd-1" style="width: 500px; border-radius: 10px; ">
        <h1 class="text-light text-center"style="font-family: 'Poppins';">Register Page</h1>
        <hr class="text-light">
        <p class="text-light text-center">
            Silahkan buat akun terlebih dahulu
        </p>

        <form method="POST" action="cek_regis.php">
            <div class="mb-3" style="margin-top: 3rem;">
                <input type="text" class="form-control bg-dark text-white" id="exampleInputEmail1" aria-describedby="emailHelp" name="username" placeholder="Masukkan username">
            </div>
            <div class="mb-4">
                <input type="password" class="form-control bg-dark text-white" id="exampleInputPassword1" placeholder="Masukkan password" name="password">
            </div>
            <div>
           
            <button type="submit" class="btn btn-outline-light mt-3 container-fluid">Daftar</button>
        </form>
        <div class="text-white mt-3 text-center">
            <p>Sudah punya akun? <a href="login.php" class="text-white">Login di sini.</a></p>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

</body>

</html>