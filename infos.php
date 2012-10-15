<?php 
if(!isset($selectedSite)) {
  $selectedSite = basename($_SERVER['PHP_SELF']);
  include "index.php"; 
} else {
?>

<h1> Infos </h1>
<p> Infos zu Pelz, Tierrechten, Antispeziesismus und Abolitionismus </p>
<p> bla bla bla </p>

<?php
}
?>
