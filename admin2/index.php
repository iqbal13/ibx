<?php include('include/header.php'); ?>
            
           <div id="wrapper">
			  <?php include('include/nav.php'); ?>
        
        		<div id="content">
                	<?php
					if(isset($_GET['post'])){
							include('post.php');
					} else if (isset($_GET['menu'])){
							include('menu.php');
					} else if (isset($_GET['gallery'])){
							include('gallery.php');
					} else if(isset($_GET['exhibitor'])){
							include('exhibitor.php');
					} else if(isset($_GET['register'])){
							include('register.php');
					} else if(isset($_GET['visitor'])){
							include('visitor.php');
					} else if(isset($_GET['insert_post'])){
							include('insert_post.php'); 
					}else {
						echo "<h2> Welcome to Admin area <br> IBX.ASIA </h2>";
					}
					?>
					
			</div>