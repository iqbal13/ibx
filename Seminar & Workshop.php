<?php
include('include/config.php');
?>

<?php include('include/top.php'); ?>
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
        <h3> Seminar IBX 2014 </h3>
		<div class="content" style="padding:2%">
		<p>Untuk registrasi Seminar & workshop  dapat menghubungi :</p>
		<p>Hotline (022-910-99999), ext 149, 141, 136, 123-125</p>
		
        </div>
		</div>
		<div id="mediaroom_artikel">
		<?php
		$get = "SELECT * from posts WHERE cat_id = 3";
		$run = mysql_query($get);
		while ($data = mysql_fetch_array($run)){
			$post_title = $data['post_title'];
			$post_image = $data['post_image'];
		
			?>
			
        <div id="title" style="text-align:center"> <?php echo $post_title; ?> </div>
        <div class="seminar_content">
		<a href="admin/image/<?php echo $post_image; ?>" rel="lightbox"><img src="admin/image/<?php echo $post_image; ?>"></a>
        </div>
		
		<?php } ?>
		
		
	
      <div class="comment">
      	<!--
		<div class="box">
        	<B> 12 Comments </B> <div class="info">
            <a href="#"> 4 Sept 2014 </a> 
             <a href="#"> By Admin </a>
               <a href="#"> 12 Comments </a> 
            <a href="#"> Permalink </a>
          
            
            </div> 
      </div>
            <div class="content">
            <img src="images/blankpage.jpg" /><p> 
       		<a href="#"> Andy </a>. 1 Jam yang lalu | <a href="#"> Laporkan Penyalahgunaan </a> </p>
            <p> Hahahaha AHOK kaga bisa jadi ATM nya partai empirit, jadi ya partai empirit ga rugi juga membuangnya. Ga kaya si sapa tu dari banten..</p> 
   </div>
   
   
   
     <div class="content">
            <img src="images/blankpage.jpg" /><p> 
       		<a href="#"> Andy </a>. 1 Jam yang lalu | <a href="#"> Laporkan Penyalahgunaan </a> </p>
            <p> Hahahaha AHOK kaga bisa jadi ATM nya partai empirit, jadi ya partai empirit ga rugi juga membuangnya. Ga kaya si sapa tu dari banten..</p> 
   </div>
   
     <div class="content">
            <img src="images/blankpage.jpg" /><p> 
       		<a href="#"> Andy </a>. 1 Jam yang lalu | <a href="#"> Laporkan Penyalahgunaan </a> </p>
            <p> Hahahaha AHOK kaga bisa jadi ATM nya partai empirit, jadi ya partai empirit ga rugi juga membuangnya. Ga kaya si sapa tu dari banten..</p> 
   </div>
   
     <div class="content">
            <img src="images/blankpage.jpg" /><p> 
       		<a href="#"> Andy </a>. 1 Jam yang lalu | <a href="#"> Laporkan Penyalahgunaan </a> </p>
            <p> Hahahaha AHOK kaga bisa jadi ATM nya partai empirit, jadi ya partai empirit ga rugi juga membuangnya. Ga kaya si sapa tu dari banten..</p> 
   </div> <div id="clear"> </div>
   <div class="pagging"> <a href="#"> 1 </a>  <a href="#"> 2 </a>  <a href="#"> 3 </a> </div>
   
   -->
   </div>
   </div>
    
 	<!-- End of media room -->
            
         <div id="clear"> </div> 
         
         <div id="release">   
         <!--
			<h3> Release </h3>
            <div class="content">
         <img src="images/blankpage.jpg" /> 
         <p> <b>  Fly Fishers Serving as Transport for Noxious Little Infaders .. <a href="#"> Read More </a>  </b></p>
         <time> Sept 4 2014, 8 Comments </time>  </div>
         
         <div class="content">
         <img src="images/blankpage.jpg" /> 
         <p> <b>  Fly Fishers Serving as Transport for Noxious Little Infaders .. <a href="#"> Read More </a>  </b></p>
         <time> Sept 4 2014, 8 Comments </time>  </div>
         <div class="content">
         <img src="images/blankpage.jpg" /> 
         <p> <b>  Fly Fishers Serving as Transport for Noxious Little Infaders .. <a href="#"> Read More </a>  </b></p>
         <time> Sept 4 2014, 8 Comments </time>  </div>
         <div class="content">
         <img src="images/blankpage.jpg" /> 
         <p> <b>  Fly Fishers Serving as Transport for Noxious Little Infaders .. <a href="#"> Read More </a>  </b></p>
         <time> Sept 4 2014, 8 Comments </time>  </div>
         <div class="content">
         <img src="images/blankpage.jpg" /> 
         <p> <b>  Fly Fishers Serving as Transport for Noxious Little Infaders .. <a href="#"> Read More </a>  </b></p>
         <time> Sept 4 2014, 8 Comments </time>  </div>
         <div class="content">
         <img src="images/blankpage.jpg" /> 
         <p> <b>  Fly Fishers Serving as Transport for Noxious Little Infaders .. <a href="#"> Read More </a>  </b></p>
         <time> Sept 4 2014, 8 Comments </time>  </div>
		 -->
         </div>
            <!-- end of release -->
            
            <div id="clear"> </div>
        <div id="newsupdate">
		<!--
        <h3 style="border:none;"> News Update </h3>
           <div class="content">
         <img src="images/blankpage.jpg" /> 
         <p> <b>  Fly Fishers Serving as Transport for Noxious Little Infaders .. <a href="#"> Read More </a>  </b></p>
         <time> Sept 4 2014, 8 Comments </time>  </div>
           <div class="content">
         <img src="images/blankpage.jpg" /> 
         <p> <b>  Fly Fishers Serving as Transport for Noxious Little Infaders .. <a href="#"> Read More </a>  </b></p>
         <time> Sept 4 2014, 8 Comments </time>  </div>
           <div class="content">
         <img src="images/blankpage.jpg" /> 
         <p> <b>  Fly Fishers Serving as Transport for Noxious Little Infaders .. <a href="#"> Read More </a>  </b></p>
         <time> Sept 4 2014, 8 Comments </time>  </div>
           <div class="content">
         <img src="images/blankpage.jpg" /> 
         <p> <b>  Fly Fishers Serving as Transport for Noxious Little Infaders .. <a href="#"> Read More </a>  </b></p>
         <time> Sept 4 2014, 8 Comments </time>  </div>
           <div class="content">
         <img src="images/blankpage.jpg" /> 
         <p> <b>  Fly Fishers Serving as Transport for Noxious Little Infaders .. <a href="#"> Read More </a>  </b></p>
         <time> Sept 4 2014, 8 Comments </time>  </div>
           <div class="content">
         <img src="images/blankpage.jpg" /> 
         <p> <b>  Fly Fishers Serving as Transport for Noxious Little Infaders .. <a href="#"> Read More </a>  </b></p>
         <time> Sept 4 2014, 8 Comments </time>  </div>
		-->
         </div>
         
         <div id="clear"> </div>
         
        <div id="videopromo">
        <!--
		<h3 style="border:none;"> Video Promo</h3>
          <div class="content">
         <img src="images/blankpage.jpg" /> 
         <p> <b>  Fly Fishers Serving as Transport for Noxious Little Infaders .. <a href="#"> Read More </a>  </b></p>
         <time> Sept 4 2014, 8 Comments </time>  </div>
           
           <div class="content">
         <img src="images/blankpage.jpg" /> 
         <p> <b>  Fly Fishers Serving as Transport for Noxious Little Infaders .. <a href="#"> Read More </a>  </b></p>
         <time> Sept 4 2014, 8 Comments </time>  </div>
           <div class="content">
         <img src="images/blankpage.jpg" /> 
         <p> <b>  Fly Fishers Serving as Transport for Noxious Little Infaders .. <a href="#"> Read More </a>  </b></p>
         <time> Sept 4 2014, 8 Comments </time>  </div>
           <div class="content">
         <img src="images/blankpage.jpg" /> 
         <p> <b>  Fly Fishers Serving as Transport for Noxious Little Infaders .. <a href="#"> Read More </a>  </b></p>
         <time> Sept 4 2014, 8 Comments </time>  </div>
           <div class="content">
         <img src="images/blankpage.jpg" /> 
         <p> <b>  Fly Fishers Serving as Transport for Noxious Little Infaders .. <a href="#"> Read More </a>  </b></p>
         <time> Sept 4 2014, 8 Comments </time>  </div>
           <div class="content">
         <img src="images/blankpage.jpg" /> 
         <p> <b>  Fly Fishers Serving as Transport for Noxious Little Infaders .. <a href="#"> Read More </a>  </b></p>
         <time> Sept 4 2014, 8 Comments </time>  </div>
		-->
        </div>
            
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
