<?php
include('include/config.php');
?>

<?php include('include/top.php'); ?>
<style>
tr td { font-weight:bold;
padding:10px;margin:10px; font-size:16px; height:10px; border:none;}
input { height:25px;}
select { height:25px; }
</style>
<link type="text/css" rel="stylesheet" href="js/development-bundle/themes/ui-lightness/ui.all.css" />
    
    <script src="js/development-bundle/jquery-1.8.0.min.js"></script>
    <script src="js/development-bundle/ui/ui.core.js"></script>
    <script src="js/development-bundle/ui/ui.datepicker.js"></script>
    <script src="js/development-bundle/ui/i18n/ui.datepicker-id.js"></script>
    <script type="text/javascript" src="js/jquery.validate.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function(){
            $("#tglterbit").datepicker({
                dateFormat : "dd/mm/yy",
                changeMonth : true,
                changeYear : true
            });
        });
    </script>
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
    	<div id="mediaroom_artikel" style="boder:none;"> 
     
        <div id="title" style="margin-top:20px;">Registrasi </div>
        <div class="content">
		<p>Silahkan Registrasi disini </p>
		<table width="700" align="LEFT">
		<form method="post" id="registrasi" action="cetak.php">
			<tr>
			<td> Nama  </td> <td>:</td> <td> <input type="text" name="nama" size="30" class="required"> * <label for="nama" class="error"> </td>
			
			</tr>
			<tr>
			<td>Jenis Kelamin </td> <td>:</td>  <td> 
				<select name="jenis_kelamin" class="required">
					<option value="NULL"> Pilih Jenis Kelamin </option>
					<option value="Laki Laki"> Laki Laki </option>
					<option value="Perempuan"> Perempuan </option> 
					</select>* <label for="nama" class="error">
			</td>
			</tr>
			<tr> <td>Tanggal Lahir </td> <td> : </td>  <td> 
			<input name="tanggal_lahir" id="tglterbit" type="text" class="required" size="30" />* <label for="nama" class="error"> </td>
				</tr>
			<tr>
			<td> Email </td> <td> : </td>
			<td> <input type="email" name="email" size="30" class="required">* <label for="nama" class="error"> </td>
			</tr>
			<tr>
			<td> Facebook </td> <td> : </td>
			<td> <input type="text" name="facebook" size="30" class="required">* <label for="nama" class="error"> </td>
			</tr>
			<tr>
			<td> Twitter </td> <td> : </td>
			<td> <input type="text" name="twitter" size="30" class="required"> * <label for="nama" class="error"></td>
			</tr>
			<tr>
			<td> No. Telp </td> <td> : </td>
			<td> <input type="text" name="telepon" size="30" class="required"> * <label for="nama" class="error"></td>
			</tr>
			<tr>
			<td colspan="3" align="center"> <input type="submit" name="submit" value="Save & Print"> </td>
			</tr>
			</table>
		</form>
		
        </div>
		
		<div class="content" style="border:none; margin-top:20px; padding:5px;">
			<div id="title"> Sudah Pernah daftar ? </div>
			<p> Input nomer telepon disini </p>
			<form method="GET" action="cetak.php"> 
				<input type="text" name="no_telp" class="required" size="60"> 
				<input type="submit" name="search" value="Cari">
		</form>
		</div>
		
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
    <a href="index.html"> Home </a>
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
<script type="text/javascript">
       $(document).ready(function(){
          $("#registrasi").validate();
       });
    </script>
</html>
