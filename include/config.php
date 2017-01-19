<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "newibx";

$conn = mysql_connect($host,$user,$pass) or die ("Gagal Connect Ke Database");
$select = mysql_select_db($db,$conn);



?>