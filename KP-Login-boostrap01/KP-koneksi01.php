<?php
$servername = "localhost";
$database = "kp-db-login";
$username = "root";
$password = "P@ssw0rd123";

// $conn = mysqli_connect($servername, $username, $password, $database);
// if (!$conn){
//     die("koneksi gagal :" .mysqli_connect_error());
// } else {
//     echo "koneksi berhasil";
// }

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
    echo "koneksi berhasil";
}