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

<table align="center" bgcolor="skyblue" width="780">
	<tr>
		<td colspan="8" align="center" bgcolor="#0099cc"> <h2> View all posts here .. </h2> </td>
	</tr>
	
	<tr> 
		<th> No</th>
		<th> Nama </th>
		<th> URL </th>
		<th> Gambar </th>
		<th colspan="4"> Action </th>
	</tr>
	<?php
	include('../include/config.php');
	$get_posts = "select * from exhibitor";
	$run = mysql_query($get_posts);
	$i = 1;
	while($data = mysql_fetch_array($run)){
			$id = $data['id'];
			$nama = $data['nama'];
			$url = $data['url'];
			$gambar = $data['gambar'];
			?>
		<tr>
		<td> <?php echo $i++; ?> </tD>
		<td> <?php echo $nama; ?> </td>
		<td> <?php echo '<a href="'.$url.'">'.$url.'</a>'; ?> </td>
		<td> <img src="image/exhibitor/<?php echo $gambar; ?>" width="60" height="60"></td>
		<td>  </td>
		<td> <a href="edit_exhibitor.php?edit_exhibitor=<?php echo $id; ?>"> Edit </a> </td>
		<td> <a href="delete_exhibitor.php?delete_exhibitor=<?php echo $id; ?>"> Delete </a> </td>
		</tr>
		<?php }  }?>