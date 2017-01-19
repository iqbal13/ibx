<?php
include('../include/config.php');
session_start();
	if(!isset($_SESSION['username'])){
		header("location:login.php");
		
		}
		else {
		
?>

<!Doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width:device-width, initial-scale=1.0">
<title> Insert Post </title>
<script src="//tinymce.cachefly.net/4.1/tinymce.min.js"></script>
<script>
tinymce.init({
selector:'textarea'});</script>

</head>
<body>
	<form method="post" enctype="multipart/form-data">
		<table width="800" align="center" border="2" bgcolor="skyblue">
			<tr>
			<td colspan="6" align="center"> <h1> 	Insert Exhibitor : </h1> </td>
			</tr>
			<tr>
			<td align="right"><Strong> Nama : </td>
			<td> <input type="text" name="nama" size="60"> </td>
			</tr>
			
			<tr>
			<td align="right" ><Strong> Url : </td>
			<td> <input type="text" name="url" size="60"> </td>
			</tr>
			<tr>
			<td align="right"><Strong> Post Image : </td>
			<td> <input type="file" name="post_image"> </td>
			</tr>
			<tr>
			<td colspan="4" align="center"> <input type="submit" name="submit" value="Publish Now"> </td>
			</tr>
			</table>
		</form>
	</body>
</html>



<?php
	if(isset($_POST['submit'])){
	
			$nama = $_POST['nama'];
			$url = $_POST['url'];
		$image = $_FILES['post_image']['name'];
		$image_tmp = $_FILES['post_image']['tmp_name'];
			
		if($nama == "" OR $url == "" OR $post_image = "") {
			echo "<script>
				alert('Ada yang belum diisi, silahkan isi lagi') 
				</script>
				";
				} else {
				
				move_uploaded_file($image_tmp,"image/exhibitor/$image");
				
				$insert_posts = "insert into exhibitor (nama,url,gambar) VALUES ('$nama','$url','$image')";
				
			
				$run = mysql_query($insert_posts);
				
				if($run){
					echo "<script>
					alert('Post Has Been Published') 
					</script>
					";
					echo "<script>window.open('index.php?exhibitor','_self') </script>";
				} else {
				echo "<script> alert('gagal posting'); </script>";
				}
					
					
		
		
		
		}
		}
		}
		?>