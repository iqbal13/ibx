	<?php include('../include/config.php'); ?>
	
   <style>
   table {
	   	width:100%;
   }
   th { text-transform:uppercase;
   height:50px;
   font-size:20px;
   background:#0033CC;
   color:
   #FFFFFF;
   }
   a {text-decoration:none;
   color:black;
   }
	td {
		height:38px;
		text-align:center;
	}
	tr:nth-child(odd) td {
			background:black;
		color:white;
	} 
	tr:nth-child(odd) td a {
			color:white;
	}
	
   	</style>
<link rel="stylesheet" href="lightbox/lightbox.css" type="text/css" media="screen" />
<script type="text/javascript" src="lightbox/lightbox.js"></script>    
      <div id="insert">
            	<a href="index.php?insert_post"> <h3> Insert New Posts </h3> </a>
        </div>
    <table bgcolor="#FFFFFF" border="1px">	
    	<tr>
        <th> No </th> <th> Title </th> <th> Kategori </th><th>  Author </th> <th> Image </th> <th> Edit </th> <th> Delete </th>
        </tr>
        <?php
		$i = 1;
		$query  ="select * from posts ";
		$run = mysql_query($query);
		while($data = mysql_fetch_array($run)){
				$post_id = $data['post_id'];
				$cat_id = $data['cat_id'];
				$post_title = $data['post_title'];
		$post_author = $data['post_author'];
		$post_image = $data['post_image'];
		
		
		?>
        	<tr>
            <td> <?php echo $i++; ?> </td>
            <td> <?php echo $post_title; ?> </td>
            <td> 
		 </td>
            <td> <?php  echo $post_author; ?> </td>
            <td> <a href="image/<?php echo $post_image; ?>" rel="lightbox"> <?php echo  $post_image; ?> </a></td>
           <td> <a href="edit_post.php?edit_post=<?php echo $post_id; ?>"> Edit </a> </td>
		<td> <a href="delete_post.php?delete_post=<?php echo $post_id; ?>"> Delete </a> </td>
			</tr>
            <?php  } ?>
            
            </table>
            
            
          