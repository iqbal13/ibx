 <div id="navigation"> 
    	<ul>
        <li> <a href="index.php"> HOME</a> </li>
        <?php
	$get = "SELECT * FROM category";
	$run = mysql_query($get);
	while($data = mysql_fetch_array($run)){
		$cat_id = $data['cat_id'];
		$cat_title = $data['cat_title'];
		
		echo '<li><a href="'.$cat_title.'.php"> '.$cat_title.'</a> </li>';
		}
		?>
		</ul>
		</div>
      
	
	