<?php
include('include/config.php');
?>

<?php include('include/top.php'); ?>
<body>
<div id="background"> 
    		<div id="header">
            <div id="LOGO01"> <img src="images/LOGO01.png" /> </div>
             <div id="search">
	<div id="tfheader">
		<form id="tfnewsearch" method="get" action="http://www.google.com">
		        <input type="text" id="tfq" class="tftextinput4" name="q" size="21" maxlength="120" Placeholder="Search our website"><input type="submit" value=" " class="tfbutton4">
		</form>
		<div class="tfclear"></div>
	</div>
    </div>
     <div id="clear"> </div>
     <?php include('include/navigation.php'); ?>
    </div>
    
      
    <div id="wrapper">
     <div id="mediaroom_content">
        <h3> Media Room </h3>
       
	 <?php
	   $get = "select * from posts where cat_id = 1";
	   $run = mysql_query($get);
	   while($data = mysql_fetch_array($run)){
		$post_id = $data['post_id'];
		$cat_id = $data['cat_id'];
		$post_title = $data['post_title'];
		$post_content = substr(strip_tags($data['post_content']),0,200);
		$post_image = $data['post_image'];
		
		echo '<div class="content"> <a href="admin/image/'.$post_image.'" rel="lightbox">
		<img src="admin/image/'.$post_image.'" >  </a>
		<p><b> '.$post_title.' </b> </p>
		<p> '.$post_content.' </p>
		<a href="details.php?post='.$post_id.'"> Read More </a> </div>';
		}
		
		?>
	   
	   
        </div> 
          <div id="clear"> </div> 
            
 </div> 
 
 <?php include('include/rightbar.php'); ?>
  
 

 

<div id="footer">
    <div id="footer_menu" style="text-align:center;">
    <a href="#"> History IBX </a>
    <a href="#"> Media Room </a>
    <a href="#"> Supporting Program </a>
    <a href="#"> Seminar & Workshop </a>
    <a href="#"> Visitor </a>
    <a href="#"> Exhibitor </a>
    <a href="#"> Gallery </a>
    <a href="#" style="border-right:none;"> Live Streaming </a>
    </div>
    <p> 
 Copyright &copy;  2014 IBX.com.All rights reserved. </p>
 </div>
 </div>
   
    	
</body>
</html>
