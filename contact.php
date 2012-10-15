<?php 
if(!isset($selectedSite)) {
  $selectedSite = basename($_SERVER['PHP_SELF']);
  include "index.php"; 
} else {
?>

<h1>Kontakt</h1>

<p>Die Demo wird organisiert von einem Bündnis von Tierrechtsgruppen:</p>>

    * Voice of Liberation
    * Frankfurt Vegan
    * Die Tierfreunde e.V.

<p>Wenn ihr Fragen zur Demo habt, schickt bitte eine E-Mail an: XXX</p>

<?php
}
?>
