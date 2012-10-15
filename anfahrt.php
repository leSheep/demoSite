<?php 
if(!isset($selectedSite)) {
  $selectedSite = basename($_SERVER['PHP_SELF']);
  include "index.php"; 
} else {
?>

<h1> Anfahrt </h1>
<p> Wie ihr zur Demo kommt </p>
<p> Per Auto </p>
<p> Per Bahn </p>

<?php
}
?>
