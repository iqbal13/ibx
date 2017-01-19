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
<script>tinymce.init({selector:'textarea'});</script>
</head>
<body>
	<?php
	include('../include/config.php');
		if(isset($_GET['edit_exhibitor'])){
			$edit_id = $_GET['id'];
			$select_post = "select * from exhibitor where id = '$edit_id' ";
			$run = mysql_query($select_post);
			while($data = mysql_fetch_array($run)){
				$id = $data['id'];
				$nama = $data['nama'];
				$gambar = $data['gambar'];
				?>

	<form method="post" enctype="multipart/form-data">
		<table width="800" align="center" border="2" bgcolor="skyblue">
			<tr>
			<td colspan="6" align="center"> <h1> Update This Post : </h1> </td>
			</tr>
			<tr>
			<td align="right"><Strong> Nama: </td>
			<td> <input type="text" name="nama2" size="60" value="<?php echo $post_title; ?>"> </td>
			</tr>
		
			<tr>
			<td align="right" ><Strong> url: </td>
			<td> <input type="text" name="url2" size="60" value="<?php echo $post_author; ?>"> </td>
			</tr>
			<tr>
			<td align="right"><Strong> Post Image : </td>
			<td> <input type="file" name="post_image2" value="<?php echo $gambar; ?>"> <img src="image/<?php echo $gambar; ?>" width="60" height="60"></td>
			</tr>
			<tr> <input type="hidden" name="id" value="<?php echo $id; ?>"> </td>
			<td colspan="4" align="center"> <input type="submit" name="update" value="Update"> </td>
			</tr>
			</table>
		</form>
	</body>
</html>

<?php } }?>

<?php 
	if(isset($_POST['update'])){
	
		$update_id = $edit_id;
		$nama2 = $_POST['nama2'];
		$url2 = $_POST['url2'];
		$images = $_FILES['post_image2']['name'];
		$images_tmp = $_FILES['post_image2']['tmp_name'];
		
		if($nama2 == "" OR $url2 == "" OR $images == "") {
			echo "<script>
				alert('Ada yang belum diisi, silahkan isi lagi') 
				</script>
				";
				} else {
				
				move_uploaded_file($images_tmp2,"image/exhibitor/$images");
				
				$update_posts = "UPDATE exhibitor set
					nama ='$nama2',
					url = '$url2',
					gambar = '$images', 
					where id = '$update_id'";
			
				$run = mysql_query($update_posts);
				
				if($run){
					echo "<script>
					alert('data has been updated') 
					</script>
					";
					echo "<script>window.open('index.php?view_exhibitor.php','_self') </script>";
				}
					
					
		
		
		
		}
		}
		}
		?>