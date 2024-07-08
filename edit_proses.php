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

switch($perawatan){
    case "Beauty Whitening Rejuve":
        if($member == "Member"){
            $potongan = 500000 * 0.25;
        }else{
            $potongan = 0;
        }
        $diskon = 500000 - $potongan;
        break;  
    
    case "Beauty Acne":
        if($member == "Member"){
            $potongan = 450000 * 0.25;
        }else{
            $potongan = 0;
        }
        $diskon = 450000 - $potongan;
        break;
    
    case "Beauty Acne dan Whitening":
        if($member == "Member"){
            $potongan = 600000 * 0.25;
        }else{
            $potongan = 0;
        }
        $diskon = 600000 - $potongan;
        break;

    case "Beauty Laser Acne":
        if($member == "Member"){
            $potongan = 400000 * 0.25;
        }else{
            $potongan = 0;
        }
        $diskon = 400000 - $potongan;
        break;

    case "Beauty Laser Whitening":
        if($member == "Member"){
            $potongan = 350000 * 0.25;
        }else{
            $potongan = 0;
        }
        $diskon = 350000 - $potongan;
        break;
}

$sql = "UPDATE tbbooking SET nama='$nama', alamat='$alamat', instagram='$instagram', hp='$hp', tanggal='$tanggal', member='$member', perawatan='$perawatan', diskon='$diskon' where nik='$nik'";
$query = mysqli_query($connect, $sql) or die(mysqli_error($connect));

if ($query)
    header("location: tampil.php");
else
    echo ("Gagal Edit Data");