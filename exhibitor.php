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
</head>
<body>
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
    	<div id="mediaroom_artikel"> 
        <h3> FLOOR PLAN </h3>
        
        <div align="center">
		<a href="admin/image/exhibitor/floorplan.jpg" rel="lightbox" ><img src="admin/image/exhibitor/floorplan.jpg"  width="60%" height="60%"></a>
		</div>
		
 		
        
		     
		</div>
		
		<div id="mediaroom_artikel"> 
        <h3> EXHIBITOR </h3>
        
        <div class="thumbnail2">
		<?php
		$get=  "SELECT * FROM exhibitor rand";
		$run = mysql_query($get);
		while($data = mysql_fetch_array($run)){
			$url = $data['url'];
			$gambar = $data['gambar'];
		
		 echo '<a href="'.$url.'" target="_blank"> <img src="admin/image/exhibitor/'.$gambar.'" > </a> '; 
		 }
		?>
		
        </div>
		     
		</div>
		
		
    
 	<!-- End of media room -->
        </div>
		
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
