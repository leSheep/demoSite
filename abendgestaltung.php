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

<h2>Schlafplätze</h2>

<p>Es gibt mehrere kostenlose Schlafmöglichkeiten in Wiesbaden und Umgebung. Wenn ihr am Abend nicht mehr nach Hause fahren wollt/könnt und einen Übernachtungsplatz benötigt, schickt uns bitte eine Mail an ZZZ.</p>

<?php
}
?>
