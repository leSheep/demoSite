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
<li> <a href="http://voilib.de/"> Voice of Liberation </a> </li>
<li> <a href="http://www.frankfurt-vegan.de/"> Frankfurt Vegan </a> </li>
<li> <a href="http://www.die-tierfreunde.de/"> Die Tierfreunde </a> </li>
<li> <a href="http://www.veganlife.lu/"> Vegan Life Shop </a> </li>
<li> <a href="http://www.tierbefreier.de"> die Tierbefreier </a> </li>
<li> <a href="http://www.tvg-saar-vegan.de/"> Tierversuchsgegner Saar </a> </li>
<li> <a href="http://ti-bo.org/"> TiBo - Tierrechtsgruppe Bonn </a> </li>
<li> <a href=""> </a> </li>
<li> <a href=""> </a> </li>
<li> <a href=""> </a> </li>
<li> <a href=""> </a> </li>

</ul>
<?php
}
?>
