<?php
session_start();
include 'connect.php';

$username = mysqli_real_escape_string($connect, $_POST['username']);
$password = mysqli_real_escape_string($connect, $_POST['password']);

$sql = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
$query = mysqli_query($connect, $sql);

$cek = mysqli_num_rows($query);

if ($cek > 0) {
    $user = mysqli_fetch_assoc($query);
    $_SESSION['username'] = $user['username'];
    $_SESSION['role'] = $user['role'];
    $_SESSION['status'] = "login";
    
    if ($_SESSION['role'] == 'admin') {
        header('location:dashboard_admin.php');
    } else {
        header('location:index.php');
    }
} else {
    header("location: login.php?message=failed");
}
