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
<title> </title>
<style>
	th,td,tr,table { padding:0px; margin:10px;
	}
	th { border-left:2px solid #333;
		border-bottom:3px solid #333;} 
	td { padding:2px; border-left:2px solid #999; text-align:center;}
	</style>
</head>

<body>
<table align="center" bgcolor="skyblue" width="1000">
	<tr>
		<td colspan="8" align="center" bgcolor="#0099cc"> <h2> View all posts here .. </h2> </td>
	</tr>
	
	<tr> 
		<th> No</th>
		<th> Title </th>
		<th> Author </th>
		<th> Image </th>
		<th> Comments </th>
		<th> Edit </th>
		<th> Delete </th>
	</tr>
	<?php
	include('../include/config.php');
	$get_posts = "select * from posts";
	$run = mysql_query($get_posts);
	$i = 1;
	while($data = mysql_fetch_array($run)){
		$post_id = $data['post_id'];
		$post_title = $data['post_title'];
		$post_author = $data['post_author'];
		$post_image = $data['post_image'];
		?>
		<tr>
		<td> <?php echo $i++; ?> </tD>
		<td> <?php echo $post_title; ?> </td>
		<td> <?php echo $post_author; ?> </td>
		<td> <img src="image/<?php echo $post_image; ?>" width="60" height="60"></td>
		<td>  </td>
		<td> <a href="edit_post.php?edit_post=<?php echo $post_id; ?>"> Edit </a> </td>
		<td> <a href="delete_post.php?delete_post=<?php echo $post_id; ?>"> Delete </a> </td>
		</tr>
		<?php }  }?>