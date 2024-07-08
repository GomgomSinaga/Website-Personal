<?php
session_start();
include 'connect.php';

$username = $_POST['username'];
$password = $_POST['password'];

$sql = "INSERT INTO users (username, password) VALUES ('$username', '$password')";

$query = mysqli_query($connect, $sql) or die(mysqli_error($connect));

if ($query) {
    $_SESSION['username'] = $username;
    header("location: login.php?message=register");
}