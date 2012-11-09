<?php 
if(!isset($selectedSite)) {
  $selectedSite = basename($_SERVER['PHP_SELF']);
  include "index.php"; 
} else {
?>

<h1> Downloads </h1>

<div style=""><p> weitere Demos/Kampagnen/Aktionen: </p></div>
<div style="padding-top: 4px;">
<a href="http://www.maxmaracampaign.net/en/" target="_blank"><img src="http://www.koeln-pelzfrei.de/2009/img/banner_maxmara.gif" alt="" height="50" width="220" border="1"></a>
</div>

<div style="padding-top: 4px;"><a href="http://offensive-gegen-die-pelzindustrie.net/" target="_blank">
<img src="http://www.koeln-pelzfrei.de/2007/ogpi_banner.jpg" alt="" height="40" width="220" border="1"></a>
</div>


<?php
}
?>
