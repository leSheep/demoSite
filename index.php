<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<!-- äöüß -->
<head>
	<meta http-equiv="content-type" content="text/html; charset=UTF-8">
	<link rel="stylesheet" type="text/css" href="script/style.css">
	<title>Wiesbaden Pelzfrei</title>
</head>
<body>
<h1>BANNER    WIESBADEN PELZFREI 2013   BANNER</h1>
<div class="floating_left border">
<div class="navigationBar">
    <a href="mainpage.php">STARTSEITE</a>
	<a href="infos.php">INFOS</a>
	<a href="staende.php">STÄNDE</a>
	<a href="abendgestaltung.php">PARTY</a>
  	<a href="sekten.php">SEKTEN</a>
  	<a href="anfahrt.php">ANFAHRT</a>
  	<a href="contact.php">KONTAKT</a>
  	<a href="downloads.php">DOWNLOADS</a>
</div>
<div class="socialMediaBar">
	<p>social plugins</p>
</div></div>
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

