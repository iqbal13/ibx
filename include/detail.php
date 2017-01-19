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
     <div id="mediaroom_artikel">
        <h3> Media Room </h3>
       
	 <?php
	 if(isset($_GET['post'])){
		$post_id = $_GET['post_id'];
	   $get = "select * from posts where post_id = '$post_id'";
	   $run = mysql_query($get);
	   while($data = mysql_fetch_array($run)){
		$post_id = $data['post_id'];
		$cat_id = $data['cat_id'];
		$post_title = $data['post_title'];
		$post_content = $data['post_content'];
		$post_image = $data['post_image'];
		
		echo '<div class="content">
		<img src="admin/image/'.$post_image.'"> 
		<p><b> '.$post_title.' </b> </p>
		<p> '.$post_content.' </p>
		<a href="mediaroom.php?post=$post_id"> Read More </a> </div>';
		}
		
		?>
	   <?php include('include/detail.php'); ?>
	   
	   
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
