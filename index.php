<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<!-- äöüß -->
<head>
	<meta http-equiv="content-type" content="text/html; charset=UTF-8">
	<link rel="stylesheet" type="text/css" href="script/style.css">
	<title>Wiesbaden Pelzfrei</title>
</head>
<body>
<h1> <img src="banner.png" /> </h1>

<div class="floating_left">
<div class="menu border">
<div class="navigationBar">
    <a href="mainpage.php">STARTSEITE</a> <br />
	<a href="infos.php">INFOS</a> <br />
	<a href="staende.php">STÄNDE</a> <br />
	<a href="abendgestaltung.php">PARTY</a> <br />
  	<a href="sekten.php">SEKTEN</a> <br />
  	<a href="anfahrt.php">ANFAHRT</a> <br />
  	<a href="contact.php">KONTAKT</a> <br />
  	<a href="downloads.php">DOWNLOADS</a> <br />
</div>
<div class="socialMediaBar">
	<p>social plugins</p>
</div></div>

<div style=""><p> weitere Demos/Kampagnen/Aktionen: </p></div>
<div style="padding-top: 4px;">
<a href="http://www.maxmaracampaign.net/en/" target="_blank"><img src="http://www.koeln-pelzfrei.de/2009/img/banner_maxmara.gif" alt="" height="50" width="220" border="1"></a>
</div>

<div style="padding-top: 4px;"><a href="http://offensive-gegen-die-pelzindustrie.net/" target="_blank">
<img src="http://www.koeln-pelzfrei.de/2007/ogpi_banner.jpg" alt="" height="40" width="220" border="1"></a>
</div>

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

