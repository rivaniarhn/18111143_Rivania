<?php
require_once "koneksi.php";
$id = $_POST["id"];
$username = $_POST["username"];
$email = $_POST["email"];
$nama = $_POST["nama"];
$password = $_POST["password"];

$q = $database_connection->prepare("INSERT INTO `tabel_register` (`id`, `username`, `email`, `nama`, `password`)
VALUES (NULL, ?, ?, ?, SHA1(?));");
$q->execute([$id, $username, $email, $nama, $password]);
header("Location ../register.php");

?>
