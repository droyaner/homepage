
<div id="content">

<h1>Buchungsanfrage</h1>
	
<?php

	$timestamp = time();
	$datum = date("d.m.Y",$timestamp);
	$uhrzeit = date("H:i",$timestamp);

	if(isset($_POST["submit"]) || isset($_POST["reset"])){

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
		$StrHausnummer = htmlentities($_POST['StrHausnummer']);
		$AdressZusatz  = htmlentities($_POST['AdressZusatz']);
		$stadt         = htmlentities($_POST['stadt']);
		$bundesland    = htmlentities($_POST['bundesland']);
		$plz           = htmlentities($_POST['plz']);
		$land          = htmlentities($_POST['land ']);
		
		$anmerkung     = htmlentities($_POST['anmerkung']);
		

		//Daten auswerten
		/******* FOR TEST *******/
		$empfaenger = "Droyaner@gmx.de"; //Mailadresse
		/******* FOR BETA *******/
		$empfaenger = "Droyaner@gmx.de,werner.treu@t-online.de";
		/******* FOR Final *******/
		//$empfaenger = "werner.treu@t-online.de"; 

		$betreff    = "Buchungsanfrage: $nachname, $vorname, $datum";
		$mailtext   = "Buchungsanfrage: | $uhrzeit | $datum  
\n
Zeitraum: $TT1.$MM1.$JJJJ1 - $TT2.$MM2.$JJJJ2 
\n
Kontaktdaten:
Vorname:  $vorname 
Nachname: $nachname 
Telefon:  $telefon 
\n
Email:    $email 
\n
Adresse: 
$StrHausnummer 
$AdressZusatz
$stadt 
$bundesland
$plz
$land
\n
Anmerkung:
$anmerkung \n
				";
		// end mailtext
		$headers = array();
		$headers ="MIME-Version: 1.0";
		$headers ="Content-type: text/plain; charset=iso-8859-1";
		$headers ="From: $nachname, $vorname <$email>";

		


		if(mail( $empfaenger,
		$betreff,
		$mailtext,
		implode("\r\n",$headers))){
			
		echo "  <p> 
			Vielen dank für ihr Interesse an unserer Ferienwohung.
			Ihre Anfrage wird bearbeitet.
			</p>";
		}else{
		
		echo "  <p> 
			Ihre Anfrage konnte aus technischen Gründen nicht 
			weitergeleitet werden. Wir bitten um Ihr Verständnis.
			Schreiben Sie doch bitte eine E-Mail mit ihrer Anfrage
			und informieren Sie uns über den kleinen Fehlerteufel.	
			</p>";
		}

	}else{
?>
	<p>
		Stellen Sie einfach eine unverbindliche Buchungsanfrage.
	</p>


	<div id="form_container">
	
		<form id="form_995602" class="appnitro"  method="post" action="">
		<!--
		<div class="form_description">
			<h2>Buchungsanfrage</h2>
		</div>						
			<ul >
		-->
			
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
			<input id="element_4_1" name="StrHausnummer" class="element text large" value="" type="text">
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
			<label for="element_4_4">Bundeslande </label>
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
<!--
<option value="Afghanistan" >Afghanistan</option>
<option value="Albania" >Albania</option>
<option value="Algeria" >Algeria</option>
<option value="Andorra" >Andorra</option>
<option value="Antigua and Barbuda" >Antigua and Barbuda</option>
<option value="Argentina" >Argentina</option>
<option value="Armenia" >Armenia</option>
<option value="Australia" >Australia</option>
<option value="Austria" >Austria</option>
<option value="Azerbaijan" >Azerbaijan</option>
<option value="Bahamas" >Bahamas</option>
<option value="Bahrain" >Bahrain</option>
<option value="Bangladesh" >Bangladesh</option>
<option value="Barbados" >Barbados</option>
<option value="Belarus" >Belarus</option>
<option value="Belgium" >Belgium</option>
<option value="Belize" >Belize</option>
<option value="Benin" >Benin</option>
<option value="Bhutan" >Bhutan</option>
<option value="Bolivia" >Bolivia</option>
<option value="Bosnia and Herzegovina" >Bosnia and Herzegovina</option>
<option value="Botswana" >Botswana</option>
<option value="Brazil" >Brazil</option>
<option value="Brunei" >Brunei</option>
<option value="Bulgaria" >Bulgaria</option>
<option value="Burkina Faso" >Burkina Faso</option>
<option value="Burundi" >Burundi</option>
<option value="Cambodia" >Cambodia</option>
<option value="Cameroon" >Cameroon</option>
<option value="Canada" >Canada</option>
<option value="Cape Verde" >Cape Verde</option>
<option value="Central African Republic" >Central African Republic</option>
<option value="Chad" >Chad</option>
<option value="Chile" >Chile</option>
<option value="China" >China</option>
<option value="Colombia" >Colombia</option>
<option value="Comoros" >Comoros</option>
<option value="Congo" >Congo</option>
<option value="Cook Islands and Niue" >Cook Islands and Niue</option>
<option value="Costa Rica" >Costa Rica</option>
<option value="Côte d'Ivoire" >Côte d'Ivoire</option>
<option value="Croatia" >Croatia</option>
<option value="Cuba" >Cuba</option>
<option value="Cyprus" >Cyprus</option>
<option value="Czech Republic" >Czech Republic</option>
<option value="Denmark" >Denmark</option>
<option value="Djibouti" >Djibouti</option>
<option value="Dominica" >Dominica</option>
<option value="Dominican Republic" >Dominican Republic</option>
<option value="East Timor" >East Timor</option>
<option value="Ecuador" >Ecuador</option>
<option value="Egypt" >Egypt</option>
<option value="El Salvador" >El Salvador</option>
<option value="Equatorial Guinea" >Equatorial Guinea</option>
<option value="Eritrea" >Eritrea</option>
<option value="Estonia" >Estonia</option>
<option value="Ethiopia" >Ethiopia</option>
<option value="Fiji" >Fiji</option>
<option value="Finland" >Finland</option>
<option value="France" >France</option>
<option value="Gabon" >Gabon</option>
<option value="Gambia" >Gambia</option>
<option value="Georgia" >Georgia</option>
<option value="Germany" >Germany</option>
<option value="Ghana" >Ghana</option>
<option value="Greece" >Greece</option>
<option value="Grenada" >Grenada</option>
<option value="Guatemala" >Guatemala</option>
<option value="Guinea" >Guinea</option>
<option value="Guinea-Bissau" >Guinea-Bissau</option>
<option value="Guyana" >Guyana</option>
<option value="Haiti" >Haiti</option>
<option value="Honduras" >Honduras</option>
<option value="Hong Kong" >Hong Kong</option>
<option value="Hungary" >Hungary</option>
<option value="Iceland" >Iceland</option>
<option value="India" >India</option>
<option value="Indonesia" >Indonesia</option>
<option value="Iran" >Iran</option>
<option value="Iraq" >Iraq</option>
<option value="Ireland" >Ireland</option>
<option value="Israel" >Israel</option>
<option value="Italy" >Italy</option>
<option value="Jamaica" >Jamaica</option>
<option value="Japan" >Japan</option>
<option value="Jordan" >Jordan</option>
<option value="Kazakhstan" >Kazakhstan</option>
<option value="Kenya" >Kenya</option>
<option value="Kiribati" >Kiribati</option>
<option value="North Korea" >North Korea</option>
<option value="South Korea" >South Korea</option>
<option value="Kuwait" >Kuwait</option>
<option value="Kyrgyzstan" >Kyrgyzstan</option>
<option value="Laos" >Laos</option>
<option value="Latvia" >Latvia</option>
<option value="Lebanon" >Lebanon</option>
<option value="Lesotho" >Lesotho</option>
<option value="Liberia" >Liberia</option>
<option value="Libya" >Libya</option>
<option value="Liechtenstein" >Liechtenstein</option>
<option value="Lithuania" >Lithuania</option>
<option value="Luxembourg" >Luxembourg</option>
<option value="Macedonia" >Macedonia</option>
<option value="Madagascar" >Madagascar</option>
<option value="Malawi" >Malawi</option>
<option value="Malaysia" >Malaysia</option>
<option value="Maldives" >Maldives</option>
<option value="Mali" >Mali</option>
<option value="Malta" >Malta</option>
<option value="Marshall Islands" >Marshall Islands</option>
<option value="Mauritania" >Mauritania</option>
<option value="Mauritius" >Mauritius</option>
<option value="Mexico" >Mexico</option>
<option value="Micronesia" >Micronesia</option>
<option value="Moldova" >Moldova</option>
<option value="Monaco" >Monaco</option>
<option value="Mongolia" >Mongolia</option>
<option value="Montenegro" >Montenegro</option>
<option value="Morocco" >Morocco</option>
<option value="Mozambique" >Mozambique</option>
<option value="Myanmar" >Myanmar</option>
<option value="Namibia" >Namibia</option>
<option value="Nauru" >Nauru</option>
<option value="Nepal" >Nepal</option>
<option value="Netherlands" >Netherlands</option>
<option value="New Zealand" >New Zealand</option>
<option value="Nicaragua" >Nicaragua</option>
<option value="Niger" >Niger</option>
<option value="Nigeria" >Nigeria</option>
<option value="Norway" >Norway</option>
<option value="Oman" >Oman</option>
<option value="Pakistan" >Pakistan</option>
<option value="Palau" >Palau</option>
<option value="Panama" >Panama</option>
<option value="Papua New Guinea" >Papua New Guinea</option>
<option value="Paraguay" >Paraguay</option>
<option value="Peru" >Peru</option>
<option value="Philippines" >Philippines</option>
<option value="Poland" >Poland</option>
<option value="Portugal" >Portugal</option>
<option value="Puerto Rico" >Puerto Rico</option>
<option value="Qatar" >Qatar</option>
<option value="Romania" >Romania</option>
<option value="Russia" >Russia</option>
<option value="Rwanda" >Rwanda</option>
<option value="Saint Kitts and Nevis" >Saint Kitts and Nevis</option>
<option value="Saint Lucia" >Saint Lucia</option>
<option value="Saint Vincent and the Grenadines" >Saint Vincent and the Grenadines</option>
<option value="Samoa" >Samoa</option>
<option value="San Marino" >San Marino</option>
<option value="Sao Tome and Principe" >Sao Tome and Principe</option>
<option value="Saudi Arabia" >Saudi Arabia</option>
<option value="Senegal" >Senegal</option>
<option value="Serbia and Montenegro" >Serbia and Montenegro</option>
<option value="Seychelles" >Seychelles</option>
<option value="Sierra Leone" >Sierra Leone</option>
<option value="Singapore" >Singapore</option>
<option value="Slovakia" >Slovakia</option>
<option value="Slovenia" >Slovenia</option>
<option value="Solomon Islands" >Solomon Islands</option>
<option value="Somalia" >Somalia</option>
<option value="South Africa" >South Africa</option>
<option value="Spain" >Spain</option>
<option value="Sri Lanka" >Sri Lanka</option>
<option value="Sudan" >Sudan</option>
<option value="Suriname" >Suriname</option>
<option value="Swaziland" >Swaziland</option>
<option value="Sweden" >Sweden</option>
<option value="Switzerland" >Switzerland</option>
<option value="Syria" >Syria</option>
<option value="Taiwan" >Taiwan</option>
<option value="Tajikistan" >Tajikistan</option>
<option value="Tanzania" >Tanzania</option>
<option value="Thailand" >Thailand</option>
<option value="Togo" >Togo</option>
<option value="Tonga" >Tonga</option>
<option value="Trinidad and Tobago" >Trinidad and Tobago</option>
<option value="Tunisia" >Tunisia</option>
<option value="Turkey" >Turkey</option>
<option value="Turkmenistan" >Turkmenistan</option>
<option value="Tuvalu" >Tuvalu</option>
<option value="Uganda" >Uganda</option>
<option value="Ukraine" >Ukraine</option>
<option value="United Arab Emirates" >United Arab Emirates</option>
<option value="United Kingdom" >United Kingdom</option>
<option value="United States" >United States</option>
<option value="Uruguay" >Uruguay</option>
<option value="Uzbekistan" >Uzbekistan</option>
<option value="Vanuatu" >Vanuatu</option>
<option value="Vatican City" >Vatican City</option>
<option value="Venezuela" >Venezuela</option>
<option value="Vietnam" >Vietnam</option>
<option value="Yemen" >Yemen</option>
<option value="Zambia" >Zambia</option>
<option value="Zimbabwe" >Zimbabwe</option>
-->
	
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
