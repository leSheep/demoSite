<?php 
if(!isset($selectedSite)) {
  $selectedSite = basename($_SERVER['PHP_SELF']);
  include "index.php"; 
} else {
?>

<h1>Kontakt</h1>

<p>Die Demo wird von folgenden Tierrechtsgruppen organisiert:</p>

   <ul>	
    <li><a href="http://www.voilib.de">Voice of Liberation</a></li>
    <li><a href="http://www.frankfurt-vegan.de">Frankfurt Vegan</a></li>
    <li><a href="http://www.die-tierfreunde.de">Die Tierfreunde e.V.</a></li>
   </ul>

<p>Wenn ihr Fragen zur Demo habt, schickt bitte eine <a href="mailto:wiesbaden-pelzfrei-orga@lists.riseup.net">E-Mail</a> oder nutzt das Kontaktfeld. Für Fragen aller Art sowie Feedback sind wir jederzeit dankbar.</p>

<?php
}
?>
