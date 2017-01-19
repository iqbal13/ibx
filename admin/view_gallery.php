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
	td { padding:0px; border-left:2px solid #999; text-align:center;}
	</style>
</head>

<body>

<table align="center" bgcolor="skyblue" width="780">
	<tr>
		<td colspan="8" align="center" bgcolor="#0099cc"> <h2> View All Register  </h2> </td>
	</tr>
	
	<tr> 
		<th> No</th>
		<th> ID Gallery </th>
		<th> Nama </th>
		<th> Gambar </th>
		<th> Delete </th>
	</tr>
	<?php
	include('../include/config.php');
	$get_posts = "select * from gallery ORDER BY id_gallery ASC";
	$run = mysql_query($get_posts);
	$i = 1;
	while($data = mysql_fetch_array($run)){
		$id = $data['id_gambar'];
		$id_gallery = $data['id_gallery'];
		$nama = $data['nama'];
		$gambar = $data['gambar'];
		?>
		<tr>
		<td> <?php echo $i++; ?> </tD>
		<td> <?php echo $id_gallery; ?> </td>
		<td> <?php echo $nama; ?> </td>
		<td> <?php echo "<img src='../images/gallery/photo/".$gambar."' width='300' height='100'>"; ?> </td>
		<td> <a href="delete_image.php?delete_image=<?php echo $id; ?>"> Delete </a> </td>
		</tr>
		<?php }  }?>