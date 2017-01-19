<?php
include('include/config.php');
?>

<?php include('include/top.php'); ?>
		<script src="http://jwplayer5.juraganstreaming.com/jwplayer.js" type="text/javascript"></script>
	</head>
	<body>
<div id="background"> 
	    		<div id="header">
            <div id="LOGO01"> <img src="images/LOGO01.png" /> </div>
            
     <div id="clear"> </div>
     <?php include('include/navigation.php'); ?>
    </div>
	<h3 style="text-align:center;font-size:20px;"> Live Streaming IBX 2014 - Main Stage</h3>
			
			<div id="livestreaming">
				<div id="mediaplayer">
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
				
			
			
			
			<div id="seminar"><a href="seminar1.html" target="_blank"><img src="images/ruang_kabayan.png">
			<a href="seminar2.html" target="_blank"><img src="images/boardroom.png">
			<a href="#"><img src="images/Layer1copy3.png"></div>
			<div id="mobile1"><a href="rtsp://wowza60.indostreamserver.com:1935/ibx2014_1/live">
				<img border="0" height="50" src="http://juraganstreaming.com/images/android.jpg" alt="Android" title="Android"></a>
				</div>
			<div id="mobile2"><a href="rtsp://wowza60.indostreamserver.com:1935/ibx2014_1/live"><img border="0" height="50" src="http://juraganstreaming.com/images/blackberry.jpg" alt="Android" title="Android"></a>
				</div>
			<div id="mobile3"><a href="http://wowza60.indostreamserver.com:1935/ibx2014_1/live/playlist.m3u8"><img border="0" height="50" src="http://juraganstreaming.com/images/apple.jpg" alt="Android" title="Android"></a>
				</div>
				</div>
		</div>
 </body>
 </html>