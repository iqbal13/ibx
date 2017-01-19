<?php
include('include/config.php');
?>

	<html>
	<head>
	<title> Validasi </title>
	<link rel="stylesheet" href="css/styles.css">
	</head>
	<body>
		<div id="background">
			<div id="mediaroom_artikel">
				<div class="content" style="border:none;">
			<?php
			if(isset($_GET['submit'])){
				$no_telp = $_GET['no_telp'];
			$get = "SELECT * FROM registrasi WHERE no_telp = '$no_telp'";
			$run = mysql_query($get);
				if(mysql_num_rows($run) == 0 ){
					echo "<script> alert('Anda belum terdaftar, Silahkan Daftar terlebih dahulu'); </script>";
					echo "<script> window.open('visitor registration.php','_self') </script>";
					} else {
			while($data = mysql_fetch_array($run)){
				$nama = $data['nama'];
				$no_telp = $data['no_telp'];
				$date = date('d / m / y');
			?>
				<div id="print"> 
			 <?php echo " Nama : ".$nama."<br>";
				echo '<a href="http://www.barcodesinc.com/generator/">
<img src="http://www.barcodesinc.com/generator/image.php?code='.$no_telp.'&style=197&type=C128B&width=200&height=50&xres=1&font=3"
 alt="the barcode printer: free barcode generator" border="0"></a>';
				echo "<p> ID Barcode sebagai tanda masuk Exhibition </p>";
				echo "<p>  ID Barcode berlaku selama Exhibition berlangsung 29 s/d 31 okt 2014</p>
 <p> ID Barcode tidak berlaku untuk seminar & Workshop </p>"; 
	} }
			$query = "INSERT INTO visitor (nama,no_telp,tanggal) VALUES ('$nama','$no_telp','$date')";
			$run = mysql_query($query);
			if($run) {
					echo "<script> alert('anda telah terdaftar'); </script>";
					} 



	} ?>  </div>
	 </div>
	 </div>
			
		
		
		
		
		
		</div>