<?php
include('../include/config.php');


	if(isset($_GET['delete_post'])){
		$delete_id = $_GET['delete_post'];
		$delete_posts = "delete from posts where post_id = '$delete_id'";
		$run = mysql_query($delete_posts);
		echo "<script> alert('A post Has been deleted') </script>";
		echo "<script> window.open('index.php?view_posts','_self') </script>";
		}
		?>