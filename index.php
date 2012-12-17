<!-- äöüß -->
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
	<meta http-equiv="content-type" content="text/html; charset=UTF-8">
	<link rel="stylesheet" type="text/css" href="script/style.css">
	
	<link rel="stylesheet" type="text/css" href="slideshow/engine1/style.css" />
	<script type="text/javascript" src="slideshow/engine1/jquery.js"></script>
	
	<title>Wiesbaden Pelzfrei</title>
</head>
<body>


<!-- Facebook plugin -->
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/de_DE/all.js#xfbml=1";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<!-- Facebook plugin end -->


<center><a href="http://wpf.veganseite.de/"><p style="padding-top:30px;padding-bottom:10px;"> <img src="wpf_header.png"/> </p></a></center>


<div class="floating_left">
<div class="menu border">
	<div>
	    <ul style="margin-left:-20px;">
			<li><a href="mainpage.php">STARTSEITE</a></li>
			<li><a href="infos.php">INFOS</a></li>
			<li><a href="staende.php">STÄNDE</a></li>
			<li><a href="abendgestaltung.php">PARTY</a></li>
	  		<li><a href="selbstverstaendnis.php">SELBSTVERSTÄNDNIS</a></li>
	  		<li><a href="anfahrt.php">ANFAHRT</a></li>
	  		<li><a href="contact.php">KONTAKT</a></li>
	  		<li><a href="downloads.php">DOWNLOADS</a></li>
		</ul>
	</div>
<div class="socialMediaBar" style="margin-left: 20px;margin-top:40px;">
	<!-- g+ -->
	<script type="text/javascript" src="https://apis.google.com/js/plusone.js"></script>
	<g:plusone></g:plusone>
	<!-- twitter -->
	<a href="https://twitter.com/share" class="twitter-share-button">Tweet</a>
	<script>!function(d,s,id){var 		js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
	<!-- linkedIn -->
	<script src="//platform.linkedin.com/in.js" type="text/javascript"></script>
	<script type="IN/Share" data-url="http://wpf.veganseite.de" data-counter="right"></script>
	<!-- fb -->
	<div class="fb-like" data-href="http://wpf.veganseite.de/2013/" data-send="false" data-layout="button_count" data-width="200" data-show-faces="false" data-font="arial"></div>
	
	
</div></div>

</div>
<div class="index_Main border_top">

<?php
    if(isset($selectedSite)) {
        include $selectedSite;
    } else { 
        $selectedSite = "mainpage.php";
        include $selectedSite;
    }
?>

</div>
</body>
</html>

