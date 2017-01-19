<?php
include('../include/config.php');
session_start();
	if(!isset($_SESSION['username'])){
		header("location:login.php");
		
		}
		else {
		$batas=50; //satu halaman menampilkan 10 baris
$halaman=$_GET['halaman'];
$posisi=null;
if(empty($halaman)){
  $posisi=0;
  $halaman=1;
}else{
  $posisi=($halaman-1)* $batas;
}
?>
<html>
<head>
<title> </title>
<style>
a {
text-decoration:none;
}
table{ font-size:16px;font: 16px Arial Helvetica, sans-serif; color: #000; border-collapse: collapse; border-spacing: 0;  border:1px solid #333; width:100%; margin-top:20px;}
table th { color: #fff; background-color:RED; font-size:15px; padding:2px 5px; }
table td {text-align:center; padding:1%; background-color: black; color:white;font-size:14px;}
table tr:nth-child(odd) td { background-color: white; color:black;}
	</style>
</head>

<body>
<table align="center" width="1000">

	
	<tr> 
		<th> No</th>
		<th> Nama </th>
		<th> Jenis Kelamin </th>
		<th> Tanggal Lahir </th>
		<th> Email </th>
		<th> Facebook </th>
		<th> Twitter </th>
		<th> No.Telp </th>

		<th> Delete </th>
	</tr>
	<?php
	include('../include/config.php');
	$get_posts = "select * from registrasi limit $posisi,$batas";
	$run = mysql_query($get_posts);
	$i = 1;
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
		<?php }  }
		
		
		
$tampil2="select * from registrasi";
$hasil2=mysql_query($tampil2);
$jmldata=mysql_num_rows($hasil2);
$halaman=ceil($jmldata/$batas);
echo $halaman;
?>