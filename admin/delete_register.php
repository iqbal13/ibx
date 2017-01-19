<?php
include('../include/config.php');


	if(isset($_GET['delete_register'])){
		$delete_id = $_GET['delete_register'];
		$delete_posts = "delete from registrasi where no_telp = '$delete_id'";
		$run = mysql_query($delete_posts);
		echo "<script> alert('A post Has been deleted') </script>";
		echo "<script> window.open('index.php?view_registrasi','_self') </script>";
		}
		?>