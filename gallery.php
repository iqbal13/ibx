<?php
include('include/config.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Indonesia Broadcasting Expo</title>
<link rel="stylesheet" href="css/styles.css" />
<link rel="stylesheet" href="lightbox/lightbox.css" type="text/css" media="screen" />
<script type="text/javascript" src="lightbox/lightbox.js"></script>
<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
<link rel="icon" href="favicon.ico" type="image/x-icon">

</head><body>
	<div id="background"> 
    <div id="header">
    <div id="LOGO01"> <img src="images/LOGO01.png" /> </div>
    
	<!--
	<div id="search">
	<div id="tfheader">
		<form id="tfnewsearch" method="get" action="http://www.google.com">
		        <input type="text" id="tfq" class="tftextinput4" name="q" size="21" maxlength="120" Placeholder="Search our website"><input type="submit" value=" " class="tfbutton4">
		</form>
		<div class="tfclear"></div>
	</div>
    </div>
	-->
	
     <div id="clear"> </div>
    <?php include('include/navigation.php'); ?>
    </div>
       <div id="wrapper">
	   <h3 style="margin-top=0px;color:#AE00A2;
	border-bottom:solid 3px;"> GALLERY </h3>
    	
		<?php
		$x = 1;
		$get = "SELECT gallery.id_gambar, gallery.id_gallery,gallery.gambar,kategori_gallery.id_gallery,
		kategori_gallery.title FROM gallery,
		 kategori_gallery WHERE kategori_gallery.id_gallery ='$x'";
		$run = mysql_query($get);
		while ($data = mysql_fetch_array($run)){
	
			$id_gallery = $data['id_gallery'];
			$title = $data['title'];
			
			?>
			<div id="mediaroom_artikel" style="
	border-bottom:2px solid #AE00A2;"> 
        <div id="title"><?php echo $title; ?></div>
		<div class="thumbnail">
					<?php
					$get = "select * from gallery rand where id_gallery = '$x'";
					$run = mysql_query($get);
					
				while($data = mysql_fetch_array($run)){
					$image = $data['gambar'];
				
				?>
				
		<a href="images/gallery/photo/<?php echo $image; ?>" rel="lightbox" >
		<img src="images/gallery/photo/<?php echo $image; ?> "> </a>
		
		<?php   	} 
		     ?>
		     </div> </div>
		<?php } ?> 
		
		
		
		
		
		
		
		
		
		</div>
		
		
		
    
 	<!-- End of media room -->
        
		
 <!-- End of wrapper -->
	<?php include('include/rightbar.php'); ?>
 
 <div id="footer">
    <div id="footer_menu" style="text-align:center;">
    <a href="index.html"> History IBX </a>
    <a href="mediaroom.html"> Media Room </a>
    <a href="supporting_program.html"> Supporting Program </a>
    <a href="seminar.html"> Seminar & Workshop </a>
    <a href="visitor.html"> Visitor </a>
    <a href="exhibitor.html"> Exhibitor </a>
    <a href="gallery.html"> Gallery </a>
    <a href="livestreaming.html" style="border-right:none;"> Live Streaming </a>
    </div>
    <p> 
 Copyright &copy;  2014 IBX.com.All rights reserved. </p>
 </div>
 </div>
</body>
</html>
