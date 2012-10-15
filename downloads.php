<?php 
if(!isset($selectedSite)) {
  $selectedSite = basename($_SERVER['PHP_SELF']);
  include "index.php"; 
} else {
?>

<h1> Downloads </h1>
<p> Flyer </p>
<p> Banner </p>

<?php
}
?>
