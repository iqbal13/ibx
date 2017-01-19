
<html>
<head>
<title> </title>
<style>
	th,td,tr,table { padding:0px;
	}
	th { border:2px solid;} 
	td { padding:0px; border:2px solid; text-align:center;
		border-right:none; border-left:none;}
	</style>
</head>

<body>

<table align="center">
	<tr>
		<td colspan="9" align="center" style="border:none;"> <h2> View All Register  </h2> </td>
	</tr>
	
	<tr> 
		<th> No</th>
		<th> Nama </th>
		<th> Jenis Kelamin </th>
		<th> Tanggal Lahir </th>
		<th> Email </th>
		<th> Facebook </th>
		<th> Twitter </th>
		<th> No.Telp </th>
		<th> Tanggal </th>
		<th> Delete </th>
	</tr>
	<?php
	include('include/config.php');
	$get_posts = "select * from registrasi";
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
		<td> <?php echo date('d-m-y'); ?> </td>

		<td> <a href="delete_register.php?delete_register=<?php echo $no_telp; ?>"> Delete </a> </td>
		</tr>
		<?php }  ?>