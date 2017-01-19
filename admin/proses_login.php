<?php
session_start();
require_once("../include/config.php");
$username = $_POST['username'];
$pass = $_POST['password'];
$cekuser = mysql_query("SELECT * FROM admin_login WHERE username = '$username' AND password = '$pass'");
$jumlah = mysql_num_rows($cekuser);
$hasil = mysql_fetch_array($cekuser);
if($jumlah == 0) {
echo "<script> alert('Username atau Password salah !! ')</script>";
echo "<script> window.open('login.php','_self') </script>";
} else {
if($pass <> $hasil['password']) {
echo "Password Salah!<br/>";
echo "<script> window.open('login.php','_self') </script>";
} else {
$_SESSION['username'] = $hasil['username'];

echo "<script> alert('login berhasil '); </script>";
echo "<script> window.open('index.php','_self') </script>";
}
}
?>