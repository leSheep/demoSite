<?php 
if(!isset($selectedSite)) {
  $selectedSite = basename($_SERVER['PHP_SELF']);
  include "index.php"; 
} else {
?>
<?php 
$Mail = "wiesbaden-pelzfrei-orga@lists.riseup.net"; 
$Betreff = "WPF: kontaktfeld"; 
$Name = "WiesbadenPelzFrei-OrgaTeam =)"; 
//$Homepage = ""; 
?>
<h1>Kontakt</h1>
<?php 
  if(isset($_POST['abschicken'])){ 
  if(empty($_POST['Name']) OR empty($_POST['Mail']) OR empty($_POST['Eintrag'])){ 
      print "<span style='color:red;font-weight:bold;'>Bitte f&uuml;llen Sie alle Felder korrekt aus!</span>\n"; 
  } else{ 
      $Abs_Mail = $_POST['Mail'];  
      $Abs_Name = $_POST['Name']; 
      $Abs_Nachricht = $_POST['Eintrag']; 
      $Nachricht = "Hallo $Name!\n\n $Abs_Name hat das WiesbadenPelzFrei-Kontaktfeld genutzt:\n _______\n$Abs_Nachricht\n_______\n"; 
  
      $senden = mail($Mail, $Betreff, $Nachricht,"From: $Abs_Mail"); 
  
      if($senden){ 
        print "<span style='color:red;font-weight:bold;'>Ihre Mail wurde erfolgreich versandt. VIELEN DANK!</span>"; 
      } else { 
        print "<span style='color:red;font-weight:bold;'>Ihre Mail konnte leider nicht versendet werden. Probieren Sie es sp&auml;ter noch einmal!</span>"; 
      }    
    } 
  }
?>
<p>Die Demo wird von folgenden Tierrechtsgruppen organisiert:</p>

   <ul>	
    <li> <a href="http://www.ariwa.org/"> Animal Rights Watch </a> </li>
    <li><a href="http://www.frankfurt-vegan.de">Frankfurt Vegan</a></li>
    <li><a href="http://www.voilib.de">Voice of Liberation</a></li>
   </ul>
<p>Für Nachrichten an uns schreibt einfach eine <a href="mailto:wiesbaden-pelzfrei-orga@lists.riseup.net">E-Mail</a> oder nutzt das Kontaktfeld. Wir sind für Fragen oder Feedback jederzeit dankbar!</p>

<?php 
?> 
<form style="padding-top:25px;" action="<?php print $_SERVER['PHP_SELF']; ?>" method="POST"> 
<table style="width:400px; background-color:white; color:black;"> 
<tr><td>Name</td><td><input type="text" name="Name"></td></tr> 
<tr><td>E-Mail</td><td><input type="text" name="Mail"></td></tr> 
<tr><td>Ihre Nachricht</td><td><textarea name="Eintrag" cols="70" rows="15"></textarea></td></tr> 
<tr><td><input type="submit" value="abschicken" name="abschicken"></td><td><input type="reset" value="zur&uuml;cksetzen" name="reset"></td></tr> 
</table> 
</form></p> 
<?php
}
?>
