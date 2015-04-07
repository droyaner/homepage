
<div id="content">

<h1>Buchungsanfrage</h1>

<?php
	if(isset($_POST["anfrage"]) || isset($_POST["reset"])){
		echo "<p> 
			Vielen dank für ihr Interesse an unserer Ferienwohung.
			Ihre Anfrage wird bearbeitet.
			
			</p>";
		//Daten auswerten
		$empfaenger = "Droyaner@gmx.de"; //Mailadresse
		$betreff    = "Buchungsanfrage: $nachname, $vorname";
		$mailtext   = "Buchungsanfrage \n 
				\n
				Kontaktdaten:
				Vorname: $vorname \n
				Nachname: $nachname \n
				\n
				Zeitraum:
				Anreisedatum: $anreise \n
				Abreisedatum: $abreise \n
				";
		//$antwortan  = "ich@versuchsratte.de";
 
		mail( $empfaenger,
      		$betreff,
      		$mailtext);
      		//"From: $absEmail\nReply-To: $antwortan");
	}else{
?>
<p>
Informieren Sie sich doch einfach unverbindlich ob zu ihrem Wuschtermin unsere
Ferienwohnung noch verfügbar ist.
</p>
	<!-- Starte Formular required TODO <button type="button" onclick="myFunction()">Date</button>-->
<p>
	<form action="index.php?section=buchungsanfrage" method="POST">
		<table>
			<tr>
			<td>Vorname*</td>
			<td><input type="text" name="vorname" required></td>
			</tr>
			<tr>
			<td>Nachname*</td>
			<td><input type="text" name="nachname" required></td>
			</tr>
			<tr>
			<td>E-Mail*</td>
			<td><input type="email" name="absEmail" required></td>
			</tr>
			<tr>
			<td>Straße</td>
			<td><input type="text" name="strasse"></td>
			</tr>
			<tr>
			<td>PLZ</td>
			<td><input type="text" name="plz"></td>
			</tr>
			<tr>
			<td>Wohnort</td>
			<td><input type="text" name="wohnort"></td>
			</tr>
			<tr>
			<td>Telefonnummer</td>
			<td><input type="text" name="telefonnummer"></td>
			</tr>
			<tr>
			<td>Anreisedatum*</td>
			<td><input type="text" name="anreise" required></td>
			</tr>
			<tr>
			<td>Abreisedatum*</td>
			<td><input type="text" name="abreise" required></td>
			</tr>
			<tr>
			<td>Personen*</td>
			<td><input type="text" name="personen" required></td>
			</tr>
			<tr>
			</tr>
		</table>
		<table>
			<tr>	
			<td><input type="submit" name="anfrage" value="Senden"></td>	
			<!--<td><input type="bottom" name="reset" value="Zurücksetzen"></td>-->
			</tr>
		</table>
	</form>
</p>
		
	<?php
	}
	?>

</div>
