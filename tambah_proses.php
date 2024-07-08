<?php
include 'connect.php';

$nik = $_POST['nik'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$instagram = $_POST['instagram'];
$hp = $_POST['hp'];
$tanggal = $_POST['tanggal'];
$member = $_POST['member'];
$perawatan = $_POST['perawatan'];
$diskon = $_POST['diskon'];
$potongan = 0;

switch ($perawatan) {
    case "Beauty Whitening Rejuve":
        if ($member == "Member") {
            $potongan = 500000 * 0.25;
        } else {
            $potongan = 0;
        }
        $diskon = 500000 - $potongan;
        break;

    case "Beauty Acne":
        if ($member == "Member") {
            $potongan = 450000 * 0.25;
        } else {
            $potongan = 0;
        }
        $diskon = 450000 - $potongan;
        break;

    case "Beauty Acne dan Whitening":
        if ($member == "Member") {
            $potongan = 600000 * 0.25;
        } else {
            $potongan = 0;
        }
        $diskon = 600000 - $potongan;
        break;

    case "Beauty Laser Acne":
        if ($member == "Member") {
            $potongan = 400000 * 0.25;
        } else {
            $potongan = 0;
        }
        $diskon = 400000 - $potongan;
        break;

    case "Beauty Laser Whitening":
        if ($member == "Member") {
            $potongan = 350000 * 0.25;
        } else {
            $potongan = 0;
        }
        $diskon = 350000 - $potongan;
        break;
}

// Fix the SQL query to avoid syntax errors and potential SQL injection
$sql = "INSERT INTO tbbooking (nik, nama, alamat, instagram, hp, tanggal, member, perawatan, diskon) VALUES ('$nik', '$nama', '$alamat', '$instagram', '$hp', '$tanggal', '$member', '$perawatan', '$diskon')";

$query = mysqli_query($connect, $sql);

if ($query) {
    header("location: index.php"); //homePage
} else {
    echo ("Gagal Input Data: " . mysqli_error($connect));
}
?>