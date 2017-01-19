<script type=
"text/javascript">
var s5_taf_parent = window.location;
function popup_print(){
window.open(‘preview.php’,'page’,'toolbar=0,scrollbars=1,location=0,statusbar=0,menubar=0,resizable=0,width=750,height=600,left=50,top=50,titlebar=yes’)
}
</script>
<body onLoad="window.print()">


<?php
include ('include/config.php');
$query = "SELECT * FROM registrasi";
$sql=mysql_query($query);
while($data=mysql_fetch_array($sql)){
	$no =1;
	$nama = $data['nama'];
	echo $nama;
	} ?>