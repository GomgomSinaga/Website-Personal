<?php
include 'connect.php';
$id = $_GET['id'];

$sql = "DELETE FROM tbbooking WHERE nik = '$id'";
$query = mysqli_query($connect, $sql);

if ($query)
    header("location: tampil.php");
else
    echo ("Hapus Data Gagal");