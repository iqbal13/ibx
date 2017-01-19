<?php
include('include/config.php'); 
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<title>Live Streaming IBX 2014 Bandung</title>
		<link href="css/streaming.css" rel="stylesheet" type="text/css">
		<script src="http://jwplayer5.juraganstreaming.com/jwplayer.js" type="text/javascript"></script>
	</head>
	<body>
		<div id="background">
			<div id="LOGO01"> <img src="images/LOGO01.png"> </div>
			<?php include('include/navigation.php'); ?>
			
			<div id="main_stage">
			
			<h3 style="text-align:center"> Live Streaming IBX 2014 - Main Stage</h3>
				<div id="MediaPlayer"></div>
				<script type="text/javascript">
					var config = {
						id: "playerID",
						screencolor: "000000",
						width: "720",
						height: "405",

						file: "live",
						flashplayer: "http://jwplayer5.juraganstreaming.com/player.swf",
						skin: "http://jwplayer5.juraganstreaming.com/skins/bekle.zip",
						provider : "rtmp",
						streamer: "rtmp://wowza60.indostreamserver.com:1935/ibx2014_1/",

						autostart: true,
						bufferlength: "0",
						wmode: "transparent",
						controlbar: "over",
						image: "http://juraganstreaming.com/images/online-streaming.jpg",
						stretching: "exactfit"
					}
					jwplayer("MediaPlayer").setup(config);
				</script>
			
			
			</div>
			
			<div id="seminar1"><a href="seminar1.html" target="_blank"><img src="images/ruang_kabayan.png"></div>
			<div id="seminar2"><a href="seminar2.html" target="_blank"><img src="images/boardroom.png"></div>
			<div id="seminar3"><a href="#"><img src="images/Layer1copy3.png"></div>
			<div id="mobile1"><a href="rtsp://wowza60.indostreamserver.com:1935/ibx2014_1/live">
				<img border="0" height="50" src="http://juraganstreaming.com/images/android.jpg" alt="Android" title="Android"></a>
				</div>
			<div id="mobile2"><a href="rtsp://wowza60.indostreamserver.com:1935/ibx2014_1/live"><img border="0" height="50" src="http://juraganstreaming.com/images/blackberry.jpg" alt="Android" title="Android"></a>
				</div>
			<div id="mobile3"><a href="http://wowza60.indostreamserver.com:1935/ibx2014_1/live/playlist.m3u8"><img border="0" height="50" src="http://juraganstreaming.com/images/apple.jpg" alt="Android" title="Android"></a>
				</div>
		</div>
 </body>
 </html>