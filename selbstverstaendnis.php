<?php 
if(!isset($selectedSite)) {
  $selectedSite = basename($_SERVER['PHP_SELF']);
  include "index.php"; 
} else {
?>

<h1> Selbstverständnis </h1>
<p> Wieso wir Sekten wie universelles Leben ablehnen</p>

<ul>
	<li> emanzipatorisch </li>
	<ul><li> keine sekten & religiöser kram </li>
		<li> keine sexisten </li>
		<li> keine lookisten </li>
		<li> keine homophoben </li>
		<li> pazifistisch </li>
		<li> antiziganismus </li>
		<li> gegen antisemitismus </li>
		<li> antipatriotismus </li>
		<li> antichauvinismus </li>
		<li> antinationalismus </li>
		<li> antifaschismus </li>
	</ul>
</ul>

<p><b> wir befürworten selbstbestimmtes denken! </b></p>



<?php
}
?>
