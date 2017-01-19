<?php
include('../include/config.php');


	if(isset($_GET['delete_image'])){
		$delete_id = $_GET['delete_image'];
		$delete_posts = "delete from gallery where id_gambar = '$delete_id'";
		$run = mysql_query($delete_posts);
		echo "<script> alert('A post Has been deleted') </script>";
		echo "<script> window.open('index.php?view_gallery','_self') </script>";
		}
		?>