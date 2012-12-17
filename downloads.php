<?php 
if(!isset($selectedSite)) {
  $selectedSite = basename($_SERVER['PHP_SELF']);
  include "index.php"; 
} else {
?>

<h1> Downloads </h1>

<h2 style="text-align:left">Eigener Banner</h2>
<img src="wpf_banner_small.png" />
<p> Unseren Banner könnt ihr auf eurer Website einfügen um so zur Demo aufzurufen. Dazu müsst ihr einfach folgenden Code an der gewünschten Stelle einfügen:</p>

<code> &lt;a href=&quot;http://wpf.veganseite.de&quot;&gt; &lt;img src=&quot;http://wpf.veganseite.de/wpf_banner_small.png&quot; /&gt; &lt;/a&gt; </code>

<h2 style="text-align:left;padding-top:25px;"> Unser Flyer </h2>

<a href="downloads/wpf.pdf"> <center> <img src="downloads/wpf.jpg"> </img> </center> </a>

<?php
}
?>
