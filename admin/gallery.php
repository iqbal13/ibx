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
<title> Gallery upload </title>
</head>
<body>
	<form method="POST" enctype="multipart/form-data"> 
		<table width="800" align="center" bgcolor="skyblue" border="2">
			<tr>	<td colspan="6">  <h2> Input Foto Untuk Gallery </h2> </tD> </tr>
			<tr>
			<td>  Kategori Foto </td> <td>
<select name="title">			
	<option> Select Category </option>
			<?php
			include('../include/config.php');
$get = "SELECT * FROM kategori_gallery";
$run = mysql_query($get);
while($data = mysql_fetch_array($run)){
	$id_gallery = $data['id_gallery'];
	$title = $data['title'];
	
	echo "<option value='$id_gallery'> $title </option>";
	}
	?>
	</td>
	</select>
	</td>
	</tr>
	<tr>
	<td> Nama Foto </td>
	<td> <input type="text" name="nama" size="60"> </td>
	</tr>
	<tr>
	<td> Upload Foto </td>
	<td> <input type="file" name="gambar"> </td>
	</tr>
	<tr>
	<td> <input type="submit" name="submit" value="Kirim"> </td>
	</tr>
	<td> <a href="index.php?insert_categori"> Tambah Kategori baru ? </a> </td>
	</table>
	</form>
</body>
</html>


<?php
if(isset($_POST['submit'])){
	$id_gallery = $_POST['title'];
	$nama = $_POST['nama'];
	$gambar = $_FILES['gambar']['name'];
	$gambar_tmp = $_FILES['gambar']['tmp_name'];

	if($gambar == ''){
		echo "<script>alert('Ada yang belum diisi , Coba lagi'); </script>";
		echo "<script> window.open('gallery.php','_self'); </script>";
		} else {
		move_uploaded_file($gambar_tmp,"../images/gallery/photo/$gambar");
				$insert = "INSERT INTO gallery (id_gallery,nama,gambar) VALUES ('$id_gallery','$nama','$gambar')";
				$run = mysql_query($insert);
				if($run) {
					echo "<script> alert('Data berhasil disimpan'); </script>";
					} 
					}
					}
					}
					?>
					