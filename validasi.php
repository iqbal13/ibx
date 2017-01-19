<?php
include('include/config.php');
?>
<html>
<head>
<style type="text/css">
	.input {
		height:30px;
		margin-left:20px;
		font-size:14px;
		}
		
	#submit {
		height:30px;
		}
		
	table {
		text-align:center;
		width:100%;
		background:skyblue;
		}
	table,tr,td,th {	

		padding:5px
		text-align:center;
		border:1px solid;
		
		}
	th {
	font-size:16px;
		background:black;
		color:white;
		border:none;
		}
		td { 
		border:none;
		font-size:12px;
		}
	</style>
</head>
<body>
<br> &nbsp;&nbsp;&nbsp;
	<form method="GET">
	<input type="text" name="no_telp" size="40" class="input">
	<input type="submit" name="submit" id="submit" value="VALIDASI">
	</form>
	</body>
	</html>
	<?php
	if(isset($_GET['submit'])){
		$no_telp = $_GET['no_telp'];
	if($no_telp == "") {
		echo "<script> alert('anda belum input'); </script>";
		echo "<script> window.open('validasi.php','_self'); </script>";
		}
	
	$query = "SELECT * FROM registrasi where no_telp = '$no_telp'";
	$run = mysql_query($query);
	while ($data = mysql_fetch_array($run) ){	
		$nama = $data['nama'];
		$no_telp = $data['no_telp'];
		$jenis_kelamin = $data['jenis_kelamin'];
		$tanggal_lahir = $data['tanggal_lahir'];
		$email = $data['email'];
		$facebook = $data['facebook'];
		$twitter = $data['twitter'];
	$tanggal = date('Y/m/d');
	$date = new DateTime();
$date->setTimezone(new DateTimeZone('UTC'));
$date->setTimezone(new DateTimeZone('Asia/Bangkok'));
		$waktu = $date->format('H:i:s');;
	


	if(!mysql_num_rows($run) > 1 ){	
	echo "<script> alert('anda belum terdaftar. silahkan daftar terlebih dahulu'); </script>";
	echo "<script> window.open('visitor registration.php','_self') </script>";
	} else {	
	echo "<script> alert('Selamat anda berhasil masuk') </script>";
		$data = "insert into visitor (nama,no_telp,tanggal,waktu,jenis_kelamin,tanggal_lahir,email,facebook,twitter) VALUES ('$nama','$no_telp','$tanggal','$waktu','$jenis_kelamin','$tanggal_lahir','$email','$facebook','$twitter')";
		$query = mysql_query($data);
		if($query) {
				echo "<script> alert('data berhasil diinput'); </script>";
				}
				echo "<script> window.open('validasi.php','_self'); </script>";
	}
	}
	
	}

	?>
	
	
<table border="1" align="Center"> 
<tr>
<h2 align="center"> Data Pengunjung </h2>
	</tr>
	<tr>
	<th> No </th>
	<th> Nama </th>
	<th> Jenis Kelamin </th>
	<th> Tanggal Lahir </th>
	<th> Email </th>
	<th> Facebook </th>
	<th> Twitter </th>
	<th> No Telp </th>
	<th> Tanggal </th>
	<th> Waktu </th>
	
	</tr>
	<tr>
	<?php
	$i = 1;
	$get = "SELECT * FROM visitor";
	$run = mysql_query($get);
	 function ubahformatTgl($tanggal) {
        $pisah = explode('-',$tanggal);
        $urutan = array($pisah[2],$pisah[1],$pisah[0]);
        $satukan = implode('-',$urutan);
        return $satukan;
    }
	if(mysql_num_rows($run) == 0 ){
		echo "<td> <h2> Belum ada data </h2> </td>";
		} else {
		
	while($data = mysql_fetch_array($run)){
		$nama = $data['nama'];
		$no_telp = $data['no_telp'];
		$tanggal = $data['tanggal'];
		$waktu = $data['waktu'];
		$email = $data['email'];
		$jenis_kelamin = $data['jenis_kelamin'];
		$tanggal_lahir = $data['tanggal_lahir'];
		$facebook = $data['facebook'];
		$twitter = $data['twitter'];
		$new = ubahformatTgl($tanggal);
		
		$new2 = ubahformatTgl($tanggal_lahir);
		?>
		<td> <?php echo $i; ?> </td>
		<td> <?php echo $nama; ?> </td>
		<td> <?php echo $jenis_kelamin; ?> </td>
		<td> <?php echo $new2; ?> </td>
		<td> <?php echo $email; ?> </td>
		<td> <?php echo $facebook; ?> </td>
		<td> <?pho echo $twitter; ?> </td>	
		<td> <?php echo $no_telp; ?> </td>
		<td> <?php echo $new; ?> </td>
		<td> <?php echo $waktu; ?> </td>
		</tr>
			
		<?php  $i++;} } ?>
		</table>
		