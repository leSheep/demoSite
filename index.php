<!-- äöüß -->
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
	<meta http-equiv="content-type" content="text/html; charset=UTF-8">
	<link rel="stylesheet" type="text/css" href="script/style.css">
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


<p style="padding-top:30px;"> <img src="banner.png" /> </p>


<div class="floating_left">
<div class="menu border">
	<div>
	    <ul>
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
<div class="socialMediaBar" style="margin-left: 70px;">
	<p>social plugins</p>
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

