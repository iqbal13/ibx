<?php include('../include/config.php'); 
$batas=50; 
$halaman=$_GET['halaman'];
$posisi=null;
if(empty($halaman)){
  $posisi=0;
  $halaman=1;
}else{
  $posisi=($halaman-1)* $batas;
}
?>


<style>
a {
	text-decoration:none;
}

table {
	width:2000px;
	margin-top:13px;
	text-align:center;
}

th {
	background:blue;
	color:white;
	height:40px;
}
td {
		margin:1%;
		height:50px;
}
tr:nth-child(odd) td {
		
		background:black;
		color:white;
}
</style>
<h2> All Register </h2>
<table>
<th> No </th> 
<th> Nama </th>
<th> Jenis Kelamin </th>
<th> Tanggal Lahir </th>
<th> Email </th>
<th> Facebook </th>
<th> Twitter </th>
<th> No Telp </th>
<th> Action </th>
<?php
$i = 1;
$get = "SELECT * FROM registrasi LIMIT $posisi,$batas";
$run = mysql_query($get);
if($run == 0 ){
		echo "<h3> Belum ada data </h3>";
} else {
	while($data = mysql_fetch_array($run)){
		$nama = $data['nama'];
		$jenis_kelamin = $data['jenis_kelamin'];
		$tanggal_lahir = $data['tanggal_lahir'];
		$email = $data['email'];
		$facebook = $data['facebook'];
		$twitter = $data['twitter'];
		$no_telp = $data['no_telp'];
		?>
		<tr>
		<td> <?php echo $i++; ?> </tD>
		<td> <?php echo $nama; ?> </td>
		<td> <?php echo $jenis_kelamin; ?> </td>
		<td> <?php echo $tanggal_lahir; ?> </td>
		<td> <?php echo $email; ?> </td>
		<td> <?php echo $facebook; ?></td>
		<td> <?php echo $twitter; ?></td>
		<td> <?php echo $no_telp; ?></td>
		<td> <a href="delete_register.php?delete_register=<?php echo $no_telp; ?>"> Delete </a> </td>
		</tr>
		<?php }  } ?>