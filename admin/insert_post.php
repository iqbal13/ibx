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
			<td colspan="6" align="center"> <h1> 	Insert New Post : </h1> </td>
			</tr>
			<tr>
			<td align="right"><Strong> Post Title : </td>
			<td> <input type="text" name="post_title" size="60"> </td>
			</tr>
			<tr>
			<td align="right"><Strong> Post Category : </td>
			<td> 
				<select name="cat">
					<option> Select a Category </option>
					<?php
					include('../include/config.php');
					$get_cat = "select * from category";
					$run_cat = mysql_query($get_cat);
					while($data = mysql_fetch_array($run_cat)){
						$cat_id = $data['cat_id'];
						$cat_title = $data['cat_title'];
					echo "
					<option value='$cat_id'> $cat_title </option>
					";
					}
					?>
					</select>
			</td>
			</tr>
			<tr>
			<td align="right" ><Strong> Post Author : </td>
			<td> <input type="text" name="post_author" size="60"> </td>
			</tr>
			<tr>
			<td align="right"><Strong> Post Keywords : </td>
			<td> <input type="text" name="post_keyword" size="60"> </td>
			</tr>
			<tr>
			<td align="right"><Strong> Post Image : </td>
			<td> <input type="file" name="post_image"> </td>
			</tr>
			<tr>
			<td align="right"><Strong> Post Content : </td>
			<td> 
			<textarea name="post_content" rows="15" cols="40">
			</textarea>

			</td>
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
		$post_title = $_POST['post_title'];
		$post_date = date('m-d-y');
		$post_cat = $_POST['cat'];
		$post_author = $_POST['post_author'];
		$post_keyword = $_POST['post_keyword'];
		$post_image = $_FILES['post_image']['name'];
		$post_image_tmp = $_FILES['post_image']['tmp_name'];
		$post_content = $_POST['post_content'];
		
		if($post_title == '' OR $post_cat == '' OR
		$post_author == '' OR $post_keyword == '' OR 
		$post_content == '') {
			echo "<script>
				alert('Ada yang belum diisi, silahkan isi lagi') 
				</script>
				";
				} else {
				
				move_uploaded_file($post_image_tmp,"image/exhibitor/$post_image");
				
				
				$insert_posts = "insert into posts (
				cat_id,post_title,post_date,post_author,
				post_keyword,post_image,post_content) VALUES 
				('$post_cat','$post_title','$post_date','$post_author',
				'$post_keyword','$post_image','$post_content')";
			
				$run = mysql_query($insert_posts);
				
				if($run){
					echo "<script>
					alert('Post Has Been Published') 
					</script>
					";
					echo "<script>window.open('index.php','_self') </script>";
				}
					
					
		
		
		
		}
		}
		}
		?>