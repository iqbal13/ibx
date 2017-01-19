<?php
	   $get = "select * from posts where cat_id = 1";
	   $run = mysql_query($get);
	   while($data = mysql_fetch_array($run)){
		$post_id = $data['post_id'];
		$cat_id = $data['cat_id'];
		$post_title = $data['post_title'];
		$post_content = substr($data['post_content'],0,200);
		$post_image = $data['post_image'];
		
		echo '<div class="content">
		<img src="admin/image/'.$post_image.'"> 
		<p><b> '.$post_title.' </b> </p>
		<p> '.$post_content.' </p>
		<a href="mediaroom.php?post=$post_id"> Read More </a> </div>';
		}
		?>