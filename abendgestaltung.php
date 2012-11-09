<?php 
if(!isset($selectedSite)) {
  $selectedSite = basename($_SERVER['PHP_SELF']);
  include "index.php"; 
} else {
?>

<h1> After-Demo-Party </h1>

<p>Nach der Demo könnt ihr euch auf der Soliparty danach im Sabot aufwärmen.
Es wird dort ein Konzert mit XXX und YYY sowie veganen Leckereien geben. Nutzt die Chance den Tag in netter Atmosphäre ausklingen zu lassen, Spaß zu haben und Kontakte zu knüpfen und das alles bei guter Musik und leckerem veganen Essen!</p>

<p> Das Sabot ist ca. 1,5 km zu Fuß vom Wiesbadener Hauptbahnhof entfernt - Adresse: Dotzheimerstraße 37 (Eingang Zimmermannstraße) </p>

<iframe width="495" height="400" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" 	
	src="https://maps.google.de/maps?hl=de&amp;client=safari&amp;ie=UTF8&amp;q=wiesbaden+sabot&amp;fb=1&amp;gl=de&amp;hq=sabot&amp;hnear=0x47bdbdd9495c843b:0x611fd80c3	
	3366c1,Wiesbaden&amp;cid=0,0,7253946623949720619&amp;t=m&amp;ll=50.080691,8.231163&amp;spn=0.005164,0.009634&amp;z=16&amp;iwloc=A&amp;output=embed"></iframe><br 
	/><small><a 
	href="https://maps.google.de/maps?hl=de&amp;client=safari&amp;ie=UTF8&amp;q=wiesbaden+sabot&amp;fb=1&amp;gl=de&amp;hq=sabot&amp;hnear=0x47bdbdd9495c843b:0x611fd80c	
	33366c1,Wiesbaden&amp;cid=0,0,7253946623949720619&amp;t=m&amp;ll=50.080691,8.231163&amp;spn=0.005164,0.009634&amp;z=16&amp;iwloc=A&amp;source=embed" 
	style="color:#0000FF;text-align:left">Größere Kartenansicht</a></small>
</iframe>

<h2>Schlafplätze</h2>

<p>Es gibt mehrere kostenlose Schlafmöglichkeiten in Wiesbaden und Umgebung. Wenn ihr am Abend nicht mehr nach Hause fahren wollt/könnt und einen Übernachtungsplatz benötigt, schickt uns bitte eine Mail an ZZZ.</p>

<?php
}
?>
