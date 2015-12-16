
<div id="content">

<h1>Buchungsanfrage</h1>
	
<?php

$timestamp = time();
$datum = date("d.m.Y", $timestamp);
$uhrzeit = date("H:i", $timestamp);

if (isset($_POST["submit"]) || isset($_POST["reset"])) {

   //clean variables
   $nachname      = htmlentities($_POST['nachname']);
   $vorname       = htmlentities($_POST['vorname']);
   $telefon       = htmlentities($_POST['telefon']);
   $email         = htmlentities($_POST['email']);
   
   // Abreise
   $TT1           = htmlentities($_POST['TT1']);
   $MM1           = htmlentities($_POST['MM1']);
   $JJJJ1         = htmlentities($_POST['JJJJ1']);
   
   // Abreise
   $TT2           = htmlentities($_POST['TT2']);
   $MM2           = htmlentities($_POST['MM2']);
   $JJJJ2         = htmlentities($_POST['JJJJ2']);
   
   // TODO check adressen
   
   // Adresse
   $strHausnummer = htmlentities($_POST['strHausnummer']);
   $adressZusatz  = htmlentities($_POST['adressZusatz']);
   $stadt         = htmlentities($_POST['stadt']);
   $bundesland    = htmlentities($_POST['bundesland']);
   $plz           = htmlentities($_POST['plz']);
   $land          = htmlentities($_POST['land ']);
   
   $anmerkung     = htmlentities($_POST['anmerkung']);
   
   
   //Daten auswerten
   /******* FOR TEST *******/
   // $empfaenger = "Droyaner@gmx.de"; //Mailadresse
   /******* FOR BETA *******/
   $empfaenger = "Droyaner@gmx.de,werner.treu@t-online.de";
   /******* FOR Final *******/
   //$empfaenger = "werner.treu@t-online.de"; 
   
   
   $betreff    = "Buchungsanfrage: $uhrzeit, $datum";
   $mailtext   = "<b>Buchungsanfrage:</b> $uhrzeit | $datum <br> <br>";
   $mailtext  .= "<b>Zeitraum:</b> $TT1.$MM1.$JJJJ1 - $TT2.$MM2.$JJJJ2 <br> <br>";
   $mailtext  .= "<b>Kontaktdaten:</b><br>";
   $mailtext  .= "Vorname:  $vorname <br>";
   $mailtext  .= "Nachname: $nachname <br>";
   $mailtext  .= "Telefon:  $telefon <br><br>";
   $mailtext  .= "Email:    $email <br> <br>";
   $mailtext  .= "<b>Adresse:</b> <br>";
   $mailtext  .= "$strHausnummer <br>";
   $mailtext  .= "$adressZusatz<br>";
   $mailtext  .= "$stadt <br>";
   $mailtext  .= "$bundesland<br>";
   $mailtext  .= "$plz<br>";
   $mailtext  .= "$land<br> <br>";
   $mailtext  .= "<b>Anmerkung:</b><br>";
   $mailtext  .= "$anmerkung <br>";


   // FOR UMLAUTE
   $umlauteIn = Array("/&Atilde;&curren;/","/&Atilde;&para;/","/&Atilde;&frac14;/","/&Atilde;&bdquo;/","/&Atilde;&ndash;/","/&Atilde;&oelig;/","/&Atilde;&Yuml;/", "/\+/");
   $replaceIn =  Array("&auml;","&ouml;","&uuml;","&Auml;","&Ouml;","&Uuml;","&szlig;"); 

   $mailtext = preg_replace($umlauteIn, $replaceIn, $mailtext);  
   $betreff = preg_replace($umlauteIn, $replaceIn, $betreff);  

   // HEADER FOR MAIL
   //$header  = "MIME-Version: 1.0\n";
   $header .= 'Content-Type: text/html; charset="UTF-8"'."\n";
   $header .= "Content-Transfer-Encoding: 8bit\n";


   if (mail($empfaenger, $betreff, $mailtext, $header)) {
      echo "  <p> 
              Vielen dank für ihr Interesse an unserer Ferienwohung.
              Ihre Anfrage wird bearbeitet.
              </p>";
   } else {
      echo "  <p> 
              Ihre Anfrage konnte aus technischen Gründen nicht 
              weitergeleitet werden. Wir bitten um Ihr Verständnis.
              Schreiben Sie doch bitte eine E-Mail mit ihrer Anfrage
              und informieren Sie uns über den kleinen Fehlerteufel.	
              </p>";
   }
} else {
?>
	<p>
	Stellen Sie einfach eine unverbindliche Buchungsanfrage.
	</p>

	<div id="form_container">
	
	<form id="form_995602" class="appnitro"  method="post" action="">
			
					<li id="li_1" >
		<label class="description" for="element_1">Name* </label>
		<span>
			<input id="element_1_1" name= "vorname" class="element text" maxlength="255" size="14" value=""required/>
			<label>Vorname</label>
		</span>
		<span>
			<input id="element_1_2" name= "nachname" class="element text" maxlength="255" size="14" value=""required/>
			<label>Nachname</label>
		</span> 

		</li>		<li id="li_6" >
		<label class="description" for="element_6">Anreisedatum* </label>
		<span>
			<input id="element_6_2" name="TT1" class="element text" size="2" maxlength="2" value="" type="text"required> /
			<label for="element_6_2">TT</label>
		</span>
		<span>
			<input id="element_6_1" name="MM1" class="element text" size="2" maxlength="2" value="" type="text"required> /
			<label for="element_6_1">MM</label>
		</span>
		<span>
	 		<input id="element_6_3" name="JJJJ1" class="element text" size="4" maxlength="4" value="" type="text"required>
			<label for="element_6_3">JJJJ</label>
		</span>
	
		<span id="calendar_6">
			<img id="cal_img_6" class="datepicker" src="img/calendar.gif" alt="Pick a date.">	
		</span>
		<script type="text/javascript">
			Calendar.setup({
			inputField	 : "element_6_3",
			baseField    : "element_6",
			displayArea  : "calendar_6",
			button		 : "cal_img_6",
			ifFormat	 : "%B %e, %Y",
			onSelect	 : selectDate
			});
		</script>
		 
		</li>		<li id="li_7" >
		<label class="description" for="element_7">Abreisedatum* </label>
		<span>
			<input id="element_7_2" name="TT2" class="element text" size="2" maxlength="2" value="" type="text"required> /
			<label for="element_7_2">TT</label>
		</span>
		<span>
			<input id="element_7_1" name="MM2" class="element text" size="2" maxlength="2" value="" type="text"required> /
			<label for="element_7_1">MM</label>
		</span>
		<span>
	 		<input id="element_7_3" name="JJJJ2" class="element text" size="4" maxlength="4" value="" type="text"required>
			<label for="element_7_3">JJJJ</label>
		</span>
	
		<span id="calendar_7">
			<img id="cal_img_7" class="datepicker" src="img/calendar.gif" alt="Pick a date.">	
		</span>
		<script type="text/javascript">
			Calendar.setup({
			inputField	 : "element_7_3",
			baseField    : "element_7",
			displayArea  : "calendar_7",
			button		 : "cal_img_7",
			ifFormat	 : "%B %e, %Y",
			onSelect	 : selectDate
			});
		</script>
		 
		</li>		<li id="li_2" >
		<label class="description" for="element_2">Telefon* </label>
		<div>
			<input id="element_2" name="telefon" class="element text medium" type="text" maxlength="255" value=""required/> 
		</div> 
		</li>		<li id="li_3" >
		<label class="description" for="element_3">Email* </label>
		<div>
			<input id="element_3" name="email" class="element text medium" type="text" maxlength="255" value=""required/> 
		</div> 
		</li>		<li id="li_4" >
		<label class="description" for="element_4">Adresse </label>
		
		<div>
			<input id="element_4_1" name="strHausnummer" class="element text large" value="" type="text">
			<!--<label for="element_4_1">Street Address</label>-->
			<label for="element_4_1">Straße und Hausnummer</label>
		</div>
	
		<div>
			<input id="element_4_2" name="AdressZusatz" class="element text large" value="" type="text">
			<!--<label for="element_4_2">Address Line 2</label>-->
			<label for="element_4_2">Adresszusatz</label>
		</div>
	
		<div class="left">
			<input id="element_4_3" name="stadt" class="element text medium" value="" type="text">
			<label for="element_4_3">Stadt</label>
		</div>
	
		<div class="right">
			<input id="element_4_4" name="bundesland" class="element text medium" value="" type="text">
			<label for="element_4_4">Bundesland </label>
		</div>
	
		<div class="left">
			<input id="element_4_5" name="plz" class="element text medium" maxlength="15" value="" type="text">
			<label for="element_4_5">PLZ </label>
		</div>
	
		<div class="right">
			<select class="element select medium" id="element_4_6" name="land"> 
				<option value="" selected="selected"></option>
				<option value="Deutschland" >Deutschland</option>
				<option value="Österreich" >Österreich</option>
				<option value="Schweiz" >Schweiz</option>
				<option value="Holland" >Holland</option>
			</select>
		<label for="element_4_6">Land </label>
	</div> 
		</li>		<li id="li_5" >
		<label class="description" for="element_5">Anmerkung </label>
		<div>
			<textarea id="element_5" name="anmerkung" class="element textarea medium"></textarea> 
		</div> 
		</li>
			
					<li class="buttons">
			    <input type="hidden" name="form_id" value="995602" />
			    
				<input id="saveForm" class="button_text" type="submit" name="submit" value="Senden" />
				<input id="saveForm" class="button_text" type="reset" name="reset" value="Zurücksetzen" />
		</li>
			</ul>
		</form>	
	</div>
<?php
}
?>
</div>
