<?php 
if(!isset($selectedSite)) {
  $selectedSite = basename($_SERVER['PHP_SELF']);
  include "index.php"; 
} else {
?>

<h1> Downloads </h1>

<h2 style="text-align:left">Eigener Banner</h2>

<p> Unseren Banner könnt ihr auf eurer Website einfügen um so zur Demo aufzurufen. Dazu müsst ihr einfach folgenden Code an der gewünschten Stelle einfügen:</p>

<code> bla bla noch nicht fertig </code>

<h2 style="text-align:left;padding-top:25px;"> Unser Flyer </h2>

<a href="downloads/wpf.pdf"> <center> <img src="downloads/wpf.jpg"> </img> </center> </a>

<?php
}
?>
