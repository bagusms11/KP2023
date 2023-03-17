<?php
require 'KP-koneksi01.php';
$email = $_POST["email"];
$password = $_POST["password"];

echo $email;

// $query_sql = "SELECT email FROM kp-tbl-login01 WHERE email = '$email' AND password = '$password'";
$query_sql = "SELECT email FROM kp-tbl-login01";

// $result = mysqli_query($conn, $query_sql);
$result = $conn->query($query_sql);
echo gettype($result);
// echo 'result '. $result->num_rows;

if (mysqli_num_rows($result) > 0) {
    header('Location: KP-dashboard01.html');
} else {
    echo '<center><h1>email atau password salah. silahkan coba lagi.</h1>';
    echo '<button><strong><a href='/'>Login</a></strong></button></center>';
}