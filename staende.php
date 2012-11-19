<?php 
if(!isset($selectedSite)) {
  $selectedSite = basename($_SERVER['PHP_SELF']);
  include "index.php"; 
} else {
?>

<h1>Stände</h1>

<p>Ab 10 Uhr werden am Treffpunkt, dem Vorplatz des Wiesbadener Hauptbahnhofs, verschiedene Stände von Tierrechtsgruppen und Vegan-Shops vertreten sein. Die Stände bleiben bis nach der Demo und dort wird es auch veganes Essen geben.</p>

<p> Folgende Stände werden dabei sein: </p>
<ul>
<li> <a href=""> </a> </li>
<li> <a href=""> </a> </li>
<li> <a href=""> </a> </li>
<li> <a href=""> </a> </li>
<li> <a href=""> </a> </li>
<li> <a href=""> </a> </li>
</ul>
<?php
}
?>
