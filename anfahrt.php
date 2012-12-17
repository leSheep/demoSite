<?php 
if(!isset($selectedSite)) {
  $selectedSite = basename($_SERVER['PHP_SELF']);
  include "index.php"; 
} else {
?>
<h1> Anfahrt </h1>

<p>
Treffpunkt und Start der Demo ist der Hauptbahnhofvorplatz in Wiesbaden. Zufahrt, ob mit Zug, Auto oder zu Fuß kann per Routenplaner einfach gesichert werden. Das nächstgelegene Parkhaus ist das im Lilien Carré (<a href="http://www.lilien-carre.de/Parken.php"> Website des Parkhauses </a>) - kostenlose Parkplätze sind nicht direkt in der Nähe verfügbar, da müsst ihr schon so in 10-15 Minuten Laufentfernung parken.
</p>	

<p style="float:right;">
<iframe width="495" height="400" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" 	
	src="https://maps.google.de/maps?f=q&amp;source=s_q&amp;hl=de&amp;geocode=&amp;q=wiesbaden+hauptbahnhof&amp;aq=&amp;sll=50.079052,8.231335&amp;sspn=0.007105,0.0192	
	9&amp;gl=de&amp;ie=UTF8&amp;hq=&amp;hnear=Hauptbahnhof&amp;t=m&amp;ll=50.080277,8.246269&amp;spn=0.022031,0.042486&amp;z=14&amp;iwloc=A&amp;output=embed"></iframe>
	<br /><small><a 
	href="https://maps.google.de/maps?f=q&amp;source=embed&amp;hl=de&amp;geocode=&amp;q=wiesbaden+hauptbahnhof&amp;aq=&amp;sll=50.079052,8.231335&amp;sspn=0.007105,0.0
	1929&amp;gl=de&amp;ie=UTF8&amp;hq=&amp;hnear=Hauptbahnhof&amp;t=m&amp;ll=50.080277,8.246269&amp;spn=0.022031,0.042486&amp;z=14&amp;iwloc=A" 
	style="color:#0000FF;text-align:left">Größere Kartenansicht</a></small>
</iframe></p>


<?php
}
?>
