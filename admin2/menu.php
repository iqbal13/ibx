<?php include('../include/config.php'); ?>
<style>
table {
		width:100%;
}
 th { text-transform:uppercase;
   height:50px;
   font-size:20px;
   background:#0033CC;
   width:200px;
   color:#FFFFFF;
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
<h3> Menu </h3>

    <a href="index.php?insert_menu"> <h3> Insert New Menu </h3> </a>
	<table border="1"> 
    	<tr>
        <th> No </th> <th> Id menu </th> <th> Title </th>
        </tr>
        
	
    <?php 
	$get = "SELECT * FROM category ORDER BY cat_id ASC";
	$run = mysql_query($get);
	$i = 1;
	while($data = mysql_fetch_array($run)){
			$cat_id = $data['cat_id'];
			$cat_title = $data['cat_title'];
	
	?>
    <tr>  <td> <?php echo $i++; ?>  </td> <td> <?php echo $cat_id; ?> </td> <td> <?php echo $cat_title; ?> </td>
    </tr>
    <?php } ?>
    </table>
    