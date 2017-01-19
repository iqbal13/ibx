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
		if(isset($_GET['edit_post'])){
			$edit_id = $_GET['edit_post'];
			$select_post = "select * from posts where post_id = '$edit_id' ";
			$run = mysql_query($select_post);
			while($data = mysql_fetch_array($run)){
				$post_id = $data['post_id'];
				$post_title = $data['post_title'];
				$post_cat = $data['cat_id'];
				$post_author = $data['post_author'];
				$post_keyword = $data['post_keyword'];
				$post_image = $data['post_image'];
				$post_content = $data['post_content'];
				?>

	<form method="post" enctype="multipart/form-data">
		<table width="800" align="center" border="2" bgcolor="skyblue">
			<tr>
			<td colspan="6" align="center"> <h1> Update This Post : </h1> </td>
			</tr>
			<tr>
			<td align="right"><Strong> Post Title : </td>
			<td> <input type="text" name="post_title2" size="60" value="<?php echo $post_title; ?>"> </td>
			</tr>
			<tr>
			<td align="right"><Strong> Post Category : </td>
			<td> 
				<select name="cat">
					<?php
					include('../include/config.php');
					$get_cat = "select * from category where cat_id = '$post_cat'";
					$run_cat = mysql_query($get_cat);
					while($data = mysql_fetch_array($run_cat)){
						$cat_id = $data['cat_id'];
						$cat_title = $data['cat_title'];
					echo "
					<option value='$cat_id'> $cat_title </option>
					";
					$get_more_cats = "select * from category";
					$run = mysql_query($get_more_cats);
					while ($row = mysql_fetch_array($run)){
						$cat_id = $row['cat_id'];
						$cat_title = $row['cat_title'];
						echo "<option value='$cat_id'> $cat_title </option>";
						}
					}
					?>
					</select>
			</td>
			</tr>
			<tr>
			<td align="right" ><Strong> Post Author : </td>
			<td> <input type="text" name="post_author2" size="60" value="<?php echo $post_author; ?>"> </td>
			</tr>
			<tr>
			<td align="right"><Strong> Post Keywords : </td>
			<td> <input type="text" name="post_keyword2" size="60" value="<?php echo $post_keyword; ?>"> </td>
			</tr>
			<tr>
			<td align="right"><Strong> Post Image : </td>
			<td> <input type="file" name="post_image2"> <img src="image/<?php echo $post_image; ?>" width="60" height="60"></td>
			</tr>
			<tr>
			<td align="right"><Strong> Post Content : </td>
			<td> 
			<textarea name="post_content2" rows="15" cols="40" value="<?php echo $post_content; ?>">
			</textarea>

			</td>
			</tr>
			<tr> <input type="hidden" name="post_id" value="<?php echo $post_id; ?>"> </td>
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
		$post_title2 = $_POST['post_title2'];
		$post_date = date('m-d-y');
		$post_cat1 = $_POST['cat'];
		$post_author2 = $_POST['post_author2'];
		$post_keyword2 = $_POST['post_keyword2'];
		$post_image2 = $_FILES['post_image2']['name'];
		$post_image_tmp2 = $_FILES['post_image2']['tmp_name'];
		$post_content2 = strip_tags($_POST['post_content2']);
		
		if($post_title2 == '' OR $post_cat1 == '' OR
		$post_author2 == '' OR $post_keyword2 == '' OR 
		$post_content2 == '') {
			echo "<script>
				alert('Ada yang belum diisi, silahkan isi lagi') 
				</script>
				";
				} else {
				
				move_uploaded_file($post_image_tmp2,"image/$post_image2");
				
				$update_posts = "UPDATE posts set
					cat_id ='$post_cat1',
					post_title = '$post_title2',
					post_date = '$post_date',
					post_author = '$post_author2',
					post_keyword = '$post_keyword2',
					post_image = '$post_image2',
					post_content = '$post_content2' 
					where post_id = '$update_id'";
			
				$run = mysql_query($update_posts);
				
				if($run){
					echo "<script>
					alert('data has been updated') 
					</script>
					";
					echo "<script>window.open('index.php?view_post.php','_self') </script>";
				}
					
					
		
		
		
		}
		}
		}
		?>