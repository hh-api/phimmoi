<script src="https://ssl.p.jwpcdn.com/player/v/8.21.1/jwplayer.js?ver=5.9.3"></script>
<body>
<style type="text/css">*{margin:0;padding:0;outline:none;}#player{position:absolute;width:100%!important;height:100%!important;}*:focus{outline:none;}
</style>
<div id="player"></div>
<script>
  var arrPreroll = ["/vast/0.php"];
  console.log(arrPreroll);
  var player = jwplayer('player');
  player.setup({
            primary: "html5",
            key: "F4+phNkFZ4+I3UhfSN6h8JPbxdnsto3caVMq+A==",
			sources: [{"file":"/0.mp4","label":"1080p","type":"video/mp4"}],
			image: "https://lh3.googleusercontent.com/-gUfxDqPDO70/YoxSqln2-JI/AAAAAAAAASI/GWtnHRCPOPAOvFYSICOG0HSRIzdD02VcACNcBGAsYHQ/s0/i.jpg",
			skin: {
                name: "tube",
                active: "red",
            },
			width: "100%",
			height: "100%",
			aspectratio: "16:9",
			playbackRateControls : true,
			autostart: true,
			mute: false,
			cast: {},
			advertising: {
				tag: arrPreroll,
				client: "vast",
				vpaidmode: "insecure",
				preloadAds: "1",
				skipoffset: "5",
				skipmessage: "Tắt QC Sau xx Giây",
				skiptext: "Tắt Quảng Cáo"        
			},
  });

  player.on('error', function() {
<?php echo 'location.href="'.$_GET['link'].'";'; ?>
  });
  player.on('play', function() {
<?php echo 'location.href="'.$_GET['link'].'";'; ?>
  });
  player.on('pause', function() {
<?php echo 'location.href="'.$_GET['link'].'";'; ?>    
  });

  player.on('complete', function() {
<?php echo 'location.href="'.$_GET['link'].'";'; ?>
  });

  player.on('adPause', function() {
<?php echo 'location.href="'.$_GET['link'].'";'; ?>
  });

  player.on('adSkipped', function() {
<?php echo 'location.href="'.$_GET['link'].'";'; ?>
  });

  player.on('adComplete', function() {
<?php echo 'location.href="'.$_GET['link'].'";'; ?>
  });

</script>
</body>
</html>
