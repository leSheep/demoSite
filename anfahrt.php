<?php 
if(!isset($selectedSite)) {
  $selectedSite = basename($_SERVER['PHP_SELF']);
  include "index.php"; 
} else {
?>
<!--> öäü -->
<h1> Anfahrt </h1>
<p> Wie ihr zur Demo kommt </p>
<p> afterparty findet im sabot statt </p>

<p> treffpunkt ist am hauptbahnhof </p>

<iframe width="495" height="400" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" 	
	src="https://maps.google.de/maps?f=q&amp;source=s_q&amp;hl=de&amp;geocode=&amp;q=wiesbaden+hauptbahnhof&amp;aq=&amp;sll=50.079052,8.231335&amp;sspn=0.007105,0.0192	
	9&amp;gl=de&amp;ie=UTF8&amp;hq=&amp;hnear=Hauptbahnhof&amp;t=m&amp;ll=50.080277,8.246269&amp;spn=0.022031,0.042486&amp;z=14&amp;iwloc=A&amp;output=embed"></iframe>
	<br /><small><a 
	href="https://maps.google.de/maps?f=q&amp;source=embed&amp;hl=de&amp;geocode=&amp;q=wiesbaden+hauptbahnhof&amp;aq=&amp;sll=50.079052,8.231335&amp;sspn=0.007105,0.0
	1929&amp;gl=de&amp;ie=UTF8&amp;hq=&amp;hnear=Hauptbahnhof&amp;t=m&amp;ll=50.080277,8.246269&amp;spn=0.022031,0.042486&amp;z=14&amp;iwloc=A" 
	style="color:#0000FF;text-align:left">Größere Kartenansicht</a></small>
</iframe>






<p> Per Bahn </p>

<?php
}
?>
