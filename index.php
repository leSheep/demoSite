<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<!-- äöüß -->
<head>
	<meta http-equiv="content-type" content="text/html; charset=UTF-8">
	<link rel="stylesheet" type="text/css" href="script/style.css">
	<title>Wiesbaden Pelzfrei</title>
</head>
<body>
<h1>WIESBADEN PELZFREI 2013</h1>
<div class="floating_left border">
<div class="navigationBar">
    <a href="mainpage.php">Startseite</a>
	<a href="infos.php">infos</a>
	<a href="staende.php">stände</a>
	<a href="abendgestaltung.php">party</a>
  	<a href="sekten.php">sekten</a>
  	<a href="anfahrt.php">anfahrt</a>
  	<a href="contact.php">contact</a>
  	<a href="downloads.php">downloads</a>
</div>
<div class="socialMediaBar">
	<p>social plugins</p>
</div></div>
<div class="index_Main">

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

