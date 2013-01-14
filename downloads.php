<?php 
if(!isset($selectedSite)) {
  $selectedSite = basename($_SERVER['PHP_SELF']);
  include "index.php"; 
} else {
?>

<h1> Werbung </h1>

<h2 style="text-align:left"> Mobi-Video</h2>
<p> Schaut euch das Mobi-Video an und teilt es fleißig, damit dadurch noch viel mehr Leute zur Demo kommen und ihre Meinung vertreten!</p>

<iframe width="640" height="360" src="http://www.youtube.com/embed/TvlPGtXd0D8?feature=player_detailpage" frameborder="0" allowfullscreen></iframe>

<br />

<h2 style="text-align:left">Eigener Banner</h2>
<p> Unseren Banner könnt ihr auf eurer Website einfügen um so zur Demo aufzurufen. Dazu müsst ihr einfach folgenden Code an der gewünschten Stelle einfügen:</p>

<img src="wpf_banner_big.png" />
<p><code> &lt;a href=&quot;http://wpf.tierrechtsdemo.de/&quot;&gt;&lt;img src=&quot;http://wpf.tierrechtsdemo.de/wpf_banner_big.png&quot; width=&quot;468&quot; height=&quot;60&quot; alt=&quot;Wiesbaden Pelzfrei Demo&quot; border=&quot;0&quot; /&gt;&lt;/a&gt; </code></p>

<img src="wpf_banner_small.png" />
<p><code> &lt;a href=&quot;http://wpf.veganseite.de&quot;&gt; &lt;img src=&quot;http://wpf.veganseite.de/wpf_banner_small.png&quot; width=&quot;234&quot; height=&quot;60&quot; alt=&quot;Wiesbaden Pelzfrei Demo&quot; border=&quot;0&quot; /&gt; &lt;/a&gt; </code></p>

<h2 style="text-align:left;padding-top:25px;"> Unser Flyer </h2>

<a href="downloads/wpf.pdf"> <center> <img src="downloads/wpf.jpg"> </img> </center> </a>

<?php
}
?>
