 <?php
include('include/config.php');
?>

<link rel="stylesheet" href="css/styles.css">

 <body onload="window.print();">
	
		
		<?php

		if(isset($_POST['submit'])){
			$nama = $_POST['nama'];
			$jenis_kelamin = $_POST['jenis_kelamin'];
			$tanggal_lahir = $_POST['tanggal_lahir'];
			$email = $_POST['email'];
			$facebook = $_POST['facebook'];
			$twitter = $_POST['twitter'];
			$no_telp = $_POST['telepon'];
			 function ubahformatTgl($tanggal_lahir) {
        $pisah = explode('/',$tanggal_lahir);
        $urutan = array($pisah[2],$pisah[1],$pisah[0]);
        $satukan = implode('-',$urutan);
        return $satukan;
    }
	
	
		if($nama =='' OR $jenis_kelamin =='NULL' OR $tanggal_lahir == '' OR $email == '' OR $facebook == '' OR $twitter == '' OR 
			$no_telp == '') {
				echo "<script> alert('Data yang anda masukan belum lengkap') </script>";
				echo "<script> window.open('Visitor registration.php','_self') </script>";
				} else {
			$query = "SELECT no_telp FROM registrasi WHERE no_telp = '$no_telp'";
				$run = mysql_query($query);
				if($query & mysql_num_rows($run) > 0 ){
					echo "<script> alert('Nomer telepon telah terdaftar'); </script>";
					echo "<script> window.open('visitor registration.php','_self') </script>";
					} else {
			
			 $ubahtgl = ubahformatTgl($tanggal_lahir);
			$query = "INSERT INTO registrasi (nama,jenis_kelamin,tanggal_lahir,email,facebook,twitter,no_telp) VALUES 
			('$nama','$jenis_kelamin','$ubahtgl','$email','$facebook','$twitter','$no_telp')";
			$run = mysql_query($query);
			if($run) { 
			?> 
			<script> alert('Pendaftaran Berhasil. Silahkan Print data ini sebagai tiket masuk') </script>
			
    			
			 <?php echo " Nama : ".$nama."<br>";
				echo '<a href="http://www.barcodesinc.com/generator/">
<img src="http://www.barcodesinc.com/generator/image.php?code='.$no_telp.'&style=197&type=C128B&width=200&height=50&xres=1&font=3"
 alt="the barcode printer: free barcode generator" border="0"></a>
 ';
				echo "<p> ID Barcode sebagai tanda masuk Exhibition </p>";
				echo "<p>  ID Barcode berlaku selama Exhibition berlangsung 29 s/d 31 okt </p>
 <p> ID Barcode tidak berlaku untuk seminar & Workshop </p>"; } }  ?>

  <?php } } else {
  if(isset($_GET['search'])){
				$no_telp = $_GET['no_telp'];
		$query = "SELECT * FROM registrasi WHERE no_telp = '$no_telp'";
		$run = mysql_query($query);
		if($no_telp == ""){
			echo "<script> alert('anda belum menulis nomer telepon'); </script>";
			echo "<script> window.open('visitor registration.php','_self') </script>";
			}
		if(mysql_num_rows($run) == 0){
			echo "<script> alert('anda belum terdaftar , silahkan daftar terlebih dahulu'); </script>";
			echo "<script> window.open('visitor registration.php','_self') </script>";
			}
		while($data = mysql_fetch_array($run)){
				$nama = $data['nama'];
				$no_telp = $data['no_telp'];
			?> 
			 <?php echo " Nama : ".$nama."<br>";
				echo '<a href="http://www.barcodesinc.com/generator/">
<img src="http://www.barcodesinc.com/generator/image.php?code='.$no_telp.'&style=197&type=C128B&width=200&height=50&xres=1&font=3"
 alt="the barcode printer: free barcode generator" border="0"></a>';
				echo "<p> ID Barcode sebagai tanda masuk Exhibition </p>";
				echo "<p>  ID Barcode berlaku selama Exhibition berlangsung 29 s/d 31 okt 2014</p>
 <p> ID Barcode tidak berlaku untuk seminar & Workshop </p>"; } }  
	} ?>
	
	
  
 