<?php
include('../include/config.php');
session_start();
	if(!isset($_SESSION['username'])){
		header("location:login.php");
		}
		else {
		
?>
<html>
<head>
<body>
<form method="post" enctype="multipart/form-data">
		<table width="800" align="center" border="2" bgcolor="skyblue">
			<tr><td> <h1> tambah kategori baru </h1></td></tr>
			<tr> <td> <input type="text" name="title"> </td><td>
			<input type="submit" name="submit" value="tambah">
			</td>
			</table>
		</form>
</body>
</html>
	<?php 
	include('../include/config.php');
		if(isset($_POST['submit'])){
			$title = $_POST['title'];
			
	$query = "INSERT INTO kategori_gallery (title) VALUES ('$title')";
	$run = mysql_query($query);
		if($run) {
			echo "<script>alert('Kategori baru berhasil ditambahkan'); </script>";
			echo "<script>window.open('index.php?insert_image','_self'); </script>";
			} else {
				echo "<script> alert('Data gagal . coba lagi'); </script>";
				echo "<script>window.open('index.php?insert_categori','_self'); </script>";
				}
				}
				}
				?>