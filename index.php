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
    <div id="slider"> <img src="images/ibx_2014.jpg" /></div>

   
    <div id="wrapper">
    	<div id="left_content">
        	<div id="mediaroom">
            	<h3> Media Room </h3>
				<div class="more" style="background-color:#990099;; margin-top:-38px;"> <a href="Media Room.php" target="_blank"> <img src="images/more.png" style="margin-top:6px;" /> </a> </div>
 
    
				 
				<?php
				$get_content = "SELECT * FROM posts where cat_id = 1 ORDER BY rand() LIMIT 0,3";
				$run = mysql_query($get_content);
				while($data = mysql_fetch_array($run)){
					$post_id = $data['post_id'];
					$post_title = $data['post_title'];
					$post_image = $data['post_image'];
					$post_content = substr(strip_tags($data['post_content']),0,83);
				
				echo '<div class="content"> 
					<img src="admin/image/'.$post_image.'"> 
					<p><strong>'.$post_title.'</strong> </p>
					<p> '.$post_content.'</p>
					<p><a href="details.php?post='.$post_id.'"> 
					Read More </a> </p> </div>';
					}
					?>
                </div>
                
                <div id="mediaroom"> 
				<div id="SupportingProgram">
    <h3> Supporting Program </h3>	 </div>
	<div class="more" style="background-color:skyblue; margin-top:-38px;"> <a href="supporting program.php" target="_blank"> <img src="images/more.png" style="margin-top:6px;" /> </a> </div>
 
			<?php
			$get = "SELECT* FROM posts where cat_id = 2 order by rand() LIMIT 0,3";
			$run = mysql_query($get);
			while($data = mysql_fetch_array($run)){
				$post_id = $data['post_id'];
					$post_title = $data['post_title'];
					$post_image = $data['post_image'];
					$post_content = substr(strip_tags($data['post_content']),0,88);
				echo '
	<div class="content"> 
                	<img src="admin/image/'.$post_image.'" /> 
                    <p><strong> '.$post_title.' </strong></p>
    <p> '.$post_content.' </p>
<p><a href="detail_supporting.php?post='.$post_id.'"> Read more </a></p>
                
                
                 </div>';
				 }
				 ?>
               
              
                 
				
    </div>
	
	 <div id="gallery"> 
    <h3> Gallery </h3>
    <div class="more" style="background-color:#D61B5B;"> <a href="gallery.php" target="_blank"> <img src="images/more.png" style="margin-top:6px;" /> </a> </div>
    <div class="line" style="background-color:#D61B5B;"> </div>
   
	<?php
	$get = "SELECT * FROM gallery  LIMIT 0,6";
	$run = mysql_query($get);
	while($data = mysql_fetch_array($run)){
		$image = $data['gambar'];
	?>
	<div class="content"><?php
	echo '
	<a href="images/gallery/photo/'.$image.'" rel="lightbox"> <img src="images/gallery/photo/'.$image.'"> ';
	?> </div>
	<?php } ?>
	
</div>
		
		<div id="SeminarWorkshop">
			<h3> Seminar & Workshop </h3>
        <div class="more" style="background-color:#FDB713;"> <a href="seminar & workshop.php" target="_blank"> <img src="images/more.png" style="margin-top:6px;" /></a></div>
        <div class="line" style="background-color:#FDB713;"></div>
		<?php
		$get = "SELECT * FROM posts WHERE cat_id = 3 ";
		$run = mysql_query($get);
		while ($data = mysql_fetch_array($run)){
		$post_id = $data['post_id'];
					$post_title = $data['post_title'];
					$post_image = $data['post_image'];
					$post_content = substr(strip_tags($data['post_content']),0,88);
		echo '<div class="content"> <p> <strong>'.$post_title.'</strong> </p>
		<a href="seminar & workshop.php"> Read More </a> </div>';
		}
		?>
			<!--<div class="content"> <p> <strong> Lorem ipsum dolor sit amet conse ctetur adipiscing elit  </strong> </p>
        <p> Nulla quis lorem neque, mattis venenatis lectus. In interdum ullamcorper dolor ..
by  <a href="#"> John Doe </a> | 29 Comments </p> </div>

	<div class="content"> <p> <strong> Lorem ipsum dolor sit amet conse ctetur adipiscing elit  </strong> </p>
        <p> Nulla quis lorem neque, mattis venenatis lectus. In interdum ullamcorper dolor ..
by  <a href="#"> John Doe </a> | 29 Comments </p> </div>

	<div class="content" style="border-bottom:none;"> <p> <strong> Lorem ipsum dolor sit amet conse ctetur adipiscing elit  </strong> </p>
        <p> Nulla quis lorem neque, mattis venenatis lectus. In interdum ullamcorper dolor ..
by  <a href="#"> John Doe </a> | 29 Comments </p> </div>

	<div class="content"  style="border-bottom:none;"> <p> <strong> Lorem ipsum dolor sit amet conse ctetur adipiscing elit  </strong> </p>
        <p> Nulla quis lorem neque, mattis venenatis lectus. In interdum ullamcorper dolor ..
by  <a href="#"> John Doe </a> | 29 Comments </p> </div> -->
			
			</div>
		
    </div>
			<div id="center_content">
				<div id="visitor" style="height:400px;">
			 <p style="font-size:14px; text-align:center;"> Untuk Pemasangan Iklan Bisa menghubungi 
</p>  <p style="font-size:14px; text-align:center;"> <b> 
Herman +62878 68363666 </p> </b>
					</div>
    
   <div id="Exhibitor">
    <h3> Exhibitor </h3>
	<div style="overflow:auto;height:625px;">
 
    <div style="margin-top:15px;"><a href="http://www.tvonenews.tv/recruitment" target="_blank"><img src="admin/image/exhibitor/tvone.jpg" /></a>
    </div>
    <div style="margin-top:15px;"><a href="http://karir.transtv.co.id/" target="_blank"> <img src="admin/image/exhibitor/transtv.jpg" /></a>
    </div>
    <div style="margin-top:15px;"><a href="http://www.indosiar.com/lowongan" target="_blank"> <img src="admin/image/exhibitor/indosiar.jpg" /></a>
    </div>
    
	<div style="margin-top:15px;"><a href="http://career.netmedia.co.id/" target="_blank"> <img src="admin/image/exhibitor/nettv.jpg" /></a>
    </div>
	<div style="margin-top:15px;"><a href="http://www.k-vision.tv/" target="_blank"> <img src="admin/image/exhibitor/kvision.jpg" /></a>
    </div>
    
    <div style="margin-top:15px;"><a href="http://www.tvri.co.id/" target="_blank"> <img src="admin/image/exhibitor/tvri.jpg" /></a>
    </div>
    
    <div style="margin-top:15px;"><a href="http://www.mnctv.com/" target="_blank"> <img src="admin/image/exhibitor/mnctv.jpg" /></a>
    </div>
    
    <div style="margin-top:15px;"><a href="http://www.trans7.co.id/career/" target="_blank"> <img src="admin/image/exhibitor/trans7.jpg" /></a>
    </div>
    
    <div style="margin-top:15px;"><a href="http://www.globaltv.co.id/" target="_blank"> <img src="admin/image/exhibitor/globaltv.jpg" /></a>
    </div>
    
	<div style="margin-top:15px;"><a href="http://rtv.co.id/info/career" target="_blank"> <img src="admin/image/exhibitor/rtv.jpg" /></a>
    </div>
	<div style="margin-top:15px;"><a href="http://kompas.tv/front/career/" target="_blank"> <img src="admin/image/exhibitor/kompastv.jpg" /></a>
    </div>
	
	<div style="margin-top:15px;"><a href="http://www.an.tv/karir.php" target="_blank"> <img src="admin/image/exhibitor/antv.jpg" /></a>
    </div>
	<div style="margin-top:15px;"><a href="http://microsite.metrotvnews.com/karir/" target="_blank"> <img src="admin/image/exhibitor/metrotv.jpg" /></a>
	</div>
	<div style="margin-top:15px;"><a href="http://www.rcti.tv/" target="_blank"> <img src="admin/image/exhibitor/rcti.jpg" /></a>
	</div>
	<div style="margin-top:15px;"><a href="http://www.sctv.co.id/" target="_blank"> <img src="admin/image/exhibitor/sctv.jpg" /></a>
	</div>
	
	<div style="margin-top:15px;"><a href="http://www.interindo.com/" target="_blank"> <img src="admin/image/exhibitor/interindo.jpg" /></a>
    </div>
	
	</div>
    </div>
    
	</div> </div>
    <div id="rightbar">
    	<div id="Signuplogin">
    
		<video width="250" controls>
		<source src="videos/ibx_2014_convert.mp4" type="video/mp4">
   
		Your browser does not support HTML5 video.
		</video>
    </div>
    
   <div id="twitter"> 
         <a class="twitter-timeline" href="https://twitter.com/IBX_Official" data-widget-id="522948816878571520">Tweets by @IBX_Official</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
    </div>
         </div>
         <!-- <div id="MostRead">
    <h3> Most Read </h3>
    <div class="content">
    <p> Sept 24th 2014 </p>
    <p> <strong> Lorem ipsum dolor sit amet conse ctetur  elit adpiscing </strong> <a href="#"> READ MORE </a> </p>
    </div>
    <div class="content">
    <p> Sept 24th 2014 </p>
    <p> <strong> Lorem ipsum dolor sit amet conse ctetur adpiscing elit </strong> <a href="#"> READ MORE </a> </p>
    </div>
    <div class="content">
    <p> Sept 24th 2014 </p>
    <p> <strong> Lorem ipsum dolor sit amet conse ctetur adpiscing elit </strong> <a href="#"> READ MORE </a> </p>
    </div>
    <div class="content" style="border-bottom:none;">
    <p> Sept 24th 2014 </p>
    <p> <strong> Lorem ipsum dolor sit amet conse ctetur adpiscing elit </strong> <a href="#"> READ MORE </a> </p>
    </div>
    <div class="more" style="background-color:#FDB713; float:left; margin-top:2px"> <a href="#"> <img src="images/more.png"> </a></div>
    </div>
         </div> -->
		 <div id="footer" style="border:none";>
	<img src="images/footer_band.jpg">
	
	</div>
         <?php include('include/footer.php'); ?>
    </div>

</body>
</html>
