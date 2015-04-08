
<div id="content">

<h1>Buchungsanfrage</h1>

<?php
/*
   Formular - Zeichenkodierung: ISO-8859-15
   Aktion: Formulardaten als E-Mail versenden.

   Erstellt mit dem Formular Generator (08.04.2015) - 
   www.webbausteine.de/blog/tools/formulargenerator.php

   Bitte testen Sie das Formular ausführlich
   und beachten Sie die Hinweise im Quelltext!
*/

// PHP Fehlermeldungen (1 um das Formular zu testen) anzeigen.
error_reporting(1);// (0/1)

// Weiterleitung - Nach dem absenden des Formulars,
// gelangt der Benutzer über einen Link auf folgende Seite:
$Weiterleitung = "index.php";

$anrede = isset($_POST["anrede"]) ? $_POST["anrede"] : ""; // Anrede

// Auswahlliste: Anrede
$array = array(
"", 
"Herr", 
"Frau", 
"Firma", 
);
$anredeAW = "<select name='anrede' size='1'>";
foreach ($array as $value) {
 $anredeAW .= "\n  <option value='" . $value . "'" .
 ((isset($_POST["anrede"]) ? $_POST["anrede"] : "") == $value ?
 " selected='selected'" : "") . ">" . $value . "</option>";
}
$anredeAW .= "\n </select>";

$nachnahme = isset($_POST["nachnahme"]) ? strip_tags(trim($_POST["nachnahme"])) : ""; // Name
$vorname = isset($_POST["vorname"]) ? strip_tags(trim($_POST["vorname"])) : ""; // Vorname
$strasse = isset($_POST["strasse"]) ? strip_tags(trim($_POST["strasse"])) : ""; // Straße
$plz = isset($_POST["plz"]) ? strip_tags(trim($_POST["plz"])) : ""; // PLZ
$wohnort = isset($_POST["wohnort"]) ? strip_tags(trim($_POST["wohnort"])) : ""; // Wohnort
$email = isset($_POST["email"]) ? strip_tags(trim($_POST["email"])) : ""; // E-Mail
$telefon = isset($_POST["telefon"]) ? strip_tags(trim($_POST["telefon"])) : ""; // Telefon

// Auswahlliste: Anreisedatum (Tag)
// Bestimmte Tage auswählen z.B.: $Tage = array(10, 20, 30);

$Tage = range(1, 31); // Start, Ende
array_unshift($Tage, "0");
$Tag8 = isset($_POST["Tag8"]) ? $_POST["Tag8"] : "";
$tagKal8 = "\n   <select name='Tag8'>";
foreach ($Tage as $value) {
 $tagKal8 .= "\n    <option value='" . $value . "'" .
 ((isset($_POST["Tag8"]) ? $_POST["Tag8"] : date("j")) === $value ?
 " selected='selected'" : "") . ">" . $value . "</option>";
}
$tagKal8 .= "\n   </select>\n  ";

// Auswahlliste: Anreisedatum (Monat)
// Bestimmte Monate auswählen z.B.: $Monate = array(3, 6, 9, 12);
$Monate = range(1, 12); // Start, Ende
array_unshift($Monate, "0");
$Monat8 = isset($_POST["Monat8"]) ? $_POST["Monat8"] : "";
$monatKal8 = "\n   <select name='Monat8'>";
foreach ($Monate as $value) {
 $monatKal8 .= "\n    <option value='" . $value . "'" .
 ((isset($_POST["Monat8"]) ? $_POST["Monat8"] : date("n")) === $value ?
 " selected='selected'" : "") . ">" . $value . "</option>";
}
$monatKal8 .= "\n   </select>\n  ";

// Auswahlliste: Anreisedatum (Jahr) 
// Bestimmte Jahre auswählen z.B.: $Jahre = array(2015, 2016, 2017);
$Jahre = range(date("Y") -10, date("Y") +10); // Y = Aktuelles Jahr -+ 10 Jahre
array_unshift($Jahre, "0000");
$Jahr8 = isset($_POST["Jahr8"]) ? $_POST["Jahr8"] : "";
$jahrKal8 = "\n   <select name='Jahr8'>";
foreach ($Jahre as $value) {
 $jahrKal8 .= "\n    <option value='" . $value . "'" .
 ((isset($_POST["Jahr8"]) ? $_POST["Jahr8"] : date("Y")) === $value ?
 " selected='selected'" : "") . ">" . $value . "</option>";
}
$jahrKal8 .= "\n   </select>\n  ";
$anreisedatum = $Tag8 . "." . $Monat8 . "." . $Jahr8; // Datumsformat hier ggf. anpassen!


// Auswahlliste: Abreisedatum (Tag)
// Bestimmte Tage auswählen z.B.: $Tage = array(10, 20, 30);
$Tage = range(1, 31); // Start, Ende
array_unshift($Tage, "0");
$Tag9 = isset($_POST["Tag9"]) ? $_POST["Tag9"] : "";
$tagKal9 = "\n   <select name='Tag9'>";
foreach ($Tage as $value) {
 $tagKal9 .= "\n    <option value='" . $value . "'" .
 ((isset($_POST["Tag9"]) ? $_POST["Tag9"] : date("j")) === $value ?
 " selected='selected'" : "") . ">" . $value . "</option>";
}
$tagKal9 .= "\n   </select>\n  ";

// Auswahlliste: Abreisedatum (Monat)
// Bestimmte Monate auswählen z.B.: $Monate = array(3, 6, 9, 12);
$Monate = range(1, 12); // Start, Ende
array_unshift($Monate, "0");
$Monat9 = isset($_POST["Monat9"]) ? $_POST["Monat9"] : "";
$monatKal9 = "\n   <select name='Monat9'>";
foreach ($Monate as $value) {
 $monatKal9 .= "\n    <option value='" . $value . "'" .
 ((isset($_POST["Monat9"]) ? $_POST["Monat9"] : date("n")) === $value ?
 " selected='selected'" : "") . ">" . $value . "</option>";
}
$monatKal9 .= "\n   </select>\n  ";

// Auswahlliste: Abreisedatum (Jahr) 
// Bestimmte Jahre auswählen z.B.: $Jahre = array(2015, 2016, 2017);

$Jahre = range(date("Y") -10, date("Y") +10); // Y = Aktuelles Jahr -+ 10 Jahre
array_unshift($Jahre, "0000");
$Jahr9 = isset($_POST["Jahr9"]) ? $_POST["Jahr9"] : "";
$jahrKal9 = "\n   <select name='Jahr9'>";
foreach ($Jahre as $value) {
 $jahrKal9 .= "\n    <option value='" . $value . "'" .
 ((isset($_POST["Jahr9"]) ? $_POST["Jahr9"] : date("Y")) === $value ?
 " selected='selected'" : "") . ">" . $value . "</option>";
}
$jahrKal9 .= "\n   </select>\n  ";
$abreisedatum = $Tag9 . "." . $Monat9 . "." . $Jahr9; // Datumsformat hier ggf. anpassen!

$personen = isset($_POST["personen"]) ? $_POST["personen"] : ""; // Personen

// Auswahlliste: Personen
$array = array(
"1", 
"2", 
);
$personenAW = "<select name='personen' size='1'>";
foreach ($array as $value) {
 $personenAW .= "\n  <option value='" . $value . "'" .
 ((isset($_POST["personen"]) ? $_POST["personen"] : "") == $value ?
 " selected='selected'" : "") . ">" . $value . "</option>";
}
$personenAW .= "\n </select>";

$haustiere = isset($_POST["haustiere"]) ? strip_tags(trim($_POST["haustiere"])) : ""; // Haustiere
$haustiereCk = isset($_POST["haustiere"]) ? " checked='checked'" : null;
$notizen = isset($_POST["notizen"]) ? strip_tags(trim($_POST["notizen"])) : ""; // Notizen

// Benutzereingaben überprüfen
// Die Meldungen müssen eventuell angepasst werden.
$Fehler = array("anrede"=>"","nachnahme"=>"","strasse"=>"","plz"=>"",
 "wohnort"=>"","telefon"=>"","anreisedatum"=>"","anreisedatum"=>"","abreisedatum"=>"",
 "abreisedatum"=>"","personen"=>"",);
if (isset($_POST["submit"])) {
 $Fehler["anrede"] = $anrede == "" ? " Bitte wählen Sie einen Eintrag aus!" : "";
 $Fehler["nachnahme"] = strlen($_POST["nachnahme"]) < 1 ? " Bitte füllen Sie dieses Feld aus!" : "";
 $Fehler["nachnahme"] .= !preg_match("/^[a-zA-Z äöüßáéíóú]/i", $_POST["nachnahme"]) ? " Geben Sie nur Buchstaben und Leerzeichen ein!" : "";
 $Fehler["strasse"] = strlen($_POST["strasse"]) < 1 ? " Bitte füllen Sie dieses Feld aus!" : "";
 $Fehler["strasse"] .= !preg_match("/[a-zäöüßáéíóú 0-9]/i", $_POST["strasse"]) ? " Geben Sie nur Buchstaben und Ziffern ein!" : "";
 $Fehler["plz"] = strlen($_POST["plz"]) < 1 ? " Bitte füllen Sie dieses Feld aus!" : "";
 $Fehler["plz"] .= !ctype_digit($_POST["plz"]) ? " Geben Sie nur Ziffern ein!" : "";
 $Fehler["wohnort"] = strlen($_POST["wohnort"]) < 1 ? " Bitte füllen Sie dieses Feld aus!" : "";
 $Fehler["wohnort"] .= !preg_match("/^[a-zA-Z äöüßáéíóú]/i", $_POST["wohnort"]) ? " Geben Sie nur Buchstaben und Leerzeichen ein!" : "";
 $Fehler["telefon"] = strlen($_POST["telefon"]) < 1 ? " Bitte füllen Sie dieses Feld aus!" : "";
 $Fehler["telefon"] .= !preg_match("/^[ 0-9\/-]{6,}+$/", $_POST["telefon"]) ? " Die Telefonnummer ist fehlerhaft!" : "";
 $Fehler["anreisedatum"] = !checkdate($_POST["Monat8"], $_POST["Tag8"], $_POST["Jahr8"]) ? " Wählen Sie ein (gültiges) Datum aus!" : "";
 $Fehler["abreisedatum"] = !checkdate($_POST["Monat9"], $_POST["Tag9"], $_POST["Jahr9"]) ? " Wählen Sie ein (gültiges) Datum aus!" : "";
 $Fehler["personen"] = $personen == "" ? " Bitte wählen Sie einen Eintrag aus!" : "";
}

// Formular erstellen
$Formular = "
<form action='" . $_SERVER["SCRIPT_NAME"] . "' method='post'>

<p>
 <label> Anrede: 
 " . $anredeAW . "
 </label>
 <span class='pflichtfeld'>&#10034; " . $Fehler["anrede"] . "</span>
</p>

<p>
 <label> Name:
 <input type='text' name='nachnahme' value='" . $nachnahme . "' size='35'>
 </label>
 <span class='pflichtfeld'>&#10034; " . $Fehler["nachnahme"] . "</span>
</p>

<p>
 <label> Vorname:
 <input type='text' name='vorname' value='" . $vorname . "' size='35'>
 </label>
</p>

<p>
 <label> Straße:
 <input type='text' name='strasse' value='" . $strasse . "' size='35'>
 </label>
 <span class='pflichtfeld'>&#10034; " . $Fehler["strasse"] . "</span>
</p>

<p>
 <label> PLZ:
 <input type='text' name='plz' value='" . $plz . "' size='35'>
 </label>
 <span class='pflichtfeld'>&#10034; " . $Fehler["plz"] . "</span>
</p>

<p>
 <label> Wohnort:
 <input type='text' name='wohnort' value='" . $wohnort . "' size='35'>
 </label>
 <span class='pflichtfeld'>&#10034; " . $Fehler["wohnort"] . "</span>
</p>

<p>
 <label> E-Mail:
 <input type='text' name='email' value='" . $email . "' size='35'>
 </label>
</p>

<p>
 <label> Telefon:
 <input type='text' name='telefon' value='" . $telefon . "' size='35'>
 </label>
 <span class='pflichtfeld'>&#10034; " . $Fehler["telefon"] . "</span>
</p>

<p>
 Anreisedatum: 
 <br><label> " . $tagKal8 . "</label>
 <label>: " . $monatKal8 . "</label>
 <label>: " . $jahrKal8 . "</label>
 <span class='pflichtfeld'>&#10034; " . $Fehler["anreisedatum"] . "</span>
</p>

<p>
 Abreisedatum: 
 <br><label> " . $tagKal9 . "</label>
 <label>: " . $monatKal9 . "</label>
 <label>: " . $jahrKal9 . "</label>
 <span class='pflichtfeld'>&#10034; " . $Fehler["abreisedatum"] . "</span>
</p>

<p>
 <label> Personen: 
 " . $personenAW . "
 </label>
 <span class='pflichtfeld'>&#10034; " . $Fehler["personen"] . "</span>
</p>

<p>
 <label> 
 <input type='checkbox' name='haustiere' value='Ja'" . $haustiereCk . ">
 Haustiere
 </label>
</p>

<p>
 <label> Notizen:
 <input type='text' name='notizen' value='" . $notizen . "' size='35'>
 </label>
</p>

<p>
 <br>
 <input type='submit' name='submit' value='Formular absenden'>
</p>

<p>
 <small>Bitte alle mit <span class='pflichtfeld'>&#10034;</span>
 markierten Felder ausfüllen.</small>
</p>

</form>
";

// Formular abgesendet
if (isset($_POST["submit"])) {

 // Sind keine Benutzer-Eingabefehler vorhanden
 if (implode("", $Fehler) == "") {

  // Daten als E-Mail versenden (Vorschlag) - Bitte anpassen!

  // Zeitzone und das aktuelle Datum setzen
  // http://de3.php.net/manual/de/timezones.europe.php
  date_default_timezone_set("Europe/Berlin");
  $Datum = date("d.m.Y H:i");

  // Empfänger E-Mail
  $Mailto = "name@example.com";
  $betreff = "Nachricht"; // Betreff

  // Inhalt der E-Mail setzen
  $Text = "   Gesendet am: $Datum Uhr
   Anrede: $anrede
   Name: $nachnahme
   Vorname: $vorname
   Straße: $strasse
   PLZ: $plz
   Wohnort: $wohnort
   E-Mail: $email
   Telefon: $telefon
   Anreisedatum: $anreisedatum
   Abreisedatum: $abreisedatum
   Personen: $personen
   Haustiere: $haustiere
   Notizen: $notizen
  ";

  // E-Mail versenden
  mb_internal_encoding("ISO-8859-15");
  $Betreff = mb_encode_mimeheader($betreff, "ISO-8859-15", "Q");
  $Kopfzeile = "MIME-Version: 1.0;\nFrom: " .
   "<" . $email . ">" . "\nContent-Type: text/plain; Charset=ISO-8859-15;\n";

  if (mail($Mailto, $Betreff, $Text, $Kopfzeile)) {

   echo "<p>Vielen Dank, die Nachricht wurde versendet.</p>";
  }
  else {

   // Wenn die Daten nicht versendet werden konnten,
   // wird die E-Mail-Adresse für den direkten Kontakt eingeblendet.
   echo "<p>Beim Senden der Nachricht ist ein Fehler aufgetreten!<br>" . 
   "Bitte wenden Sie sich direkt an: <a href='mailto:" . $Mailto . "'>" . $Mailto . "</a></p>";
  }

  // Weiterleitung
  echo "<p><a href='" . $Weiterleitung . "' target='_top'>Weiter</a></p>";
 }
 else {

  // Formular und Benutzer-Eingabefehler ausgeben
  echo $Formular;
 }
}
else {

 // Formular ausgeben
 echo $Formular;
}
?>
</div>
