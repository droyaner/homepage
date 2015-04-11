

  <div id="navcontainer">
    <ul id="navlist">
        <?php
	if($section == "startseite")
	{
	     echo '<li id="active"><a href="index.php?section=startseite" id="current">Startseite</a></li>';

	     echo ' <li><a href="index.php?section=wohnung">Wohnung</a></li>';
	     echo ' <li><a href="index.php?section=freizeit">Freizeit</a></li>';
	     echo ' <li><a href="index.php?section=anfahrt">Anfahrt</a></li>';
	     echo ' <li><a href="index.php?section=preise">Preise</a></li>';
	     echo ' <li><a href="index.php?section=buchungsanfrage">Buchen</a></li>';
	     echo ' <li><a href="index.php?section=kontakt">Kontakt</a></li>';
	}
	elseif($section == "wohnung")
	{
	     echo ' <li><a href="index.php?section=startseite">Startseite</a></li>';

	     echo '<li id="active"><a href="index.php?section=wohnung" id="current">Wohnung</a></li>';

	     echo ' <li><a href="index.php?section=freizeit">Freizeit</a></li>';
	     echo ' <li><a href="index.php?section=anfahrt">Anfahrt</a></li>';
	     echo ' <li><a href="index.php?section=preise">Preise</a></li>';
	     echo ' <li><a href="index.php?section=buchungsanfrage">Buchen</a></li>';
	     echo ' <li><a href="index.php?section=kontakt">Kontakt</a></li>';

	}

	elseif($section == "freizeit")
	{
	     echo ' <li><a href="index.php?section=startseite">Startseite</a></li>';
	     echo ' <li><a href="index.php?section=wohnung">Wohnung</a></li>';

	     echo '<li id="active"><a href="index.php?section=freizeit" id="current">Freizeit</a></li>';

	     echo ' <li><a href="index.php?section=anfahrt">Anfahrt</a></li>';
	     echo ' <li><a href="index.php?section=preise">Preise</a></li>';
	     echo ' <li><a href="index.php?section=buchungsanfrage">Buchen</a></li>';
	     echo ' <li><a href="index.php?section=kontakt">Kontakt</a></li>';

	}

	elseif($section == "anfahrt")
	{
	     echo ' <li><a href="index.php?section=startseite">Startseite</a></li>';
	     echo ' <li><a href="index.php?section=wohnung">Wohnung</a></li>';
	     echo ' <li><a href="index.php?section=freizeit">Freizeit</a></li>';

	     echo '<li id="active"><a href="index.php?section=anfahrt" id="current">Anfahrt</a></li>';

	     echo ' <li><a href="index.php?section=preise">Preise</a></li>';
	     echo ' <li><a href="index.php?section=buchungsanfrage">Buchen</a></li>';
	     echo ' <li><a href="index.php?section=kontakt">Kontakt</a></li>';

	}

	elseif($section == "preise")
	{
	     echo ' <li><a href="index.php?section=startseite">Startseite</a></li>';
	     echo ' <li><a href="index.php?section=wohnung">Wohnung</a></li>';
	     echo ' <li><a href="index.php?section=freizeit">Freizeit</a></li>';
	     echo ' <li><a href="index.php?section=anfahrt">Anfahrt</a></li>';

	     echo '<li id="active"><a href="index.php?section=preise" id="current">Preise</a></li>';

	     echo ' <li><a href="index.php?section=buchungsanfrage">Buchen</a></li>';
	     echo ' <li><a href="index.php?section=kontakt">Kontakt</a></li>';

	}

	elseif($section == "buchungsanfrage")
	{
	     echo ' <li><a href="index.php?section=startseite">Startseite</a></li>';
	     echo ' <li><a href="index.php?section=wohnung">Wohnung</a></li>';
	     echo ' <li><a href="index.php?section=freizeit">Freizeit</a></li>';
	     echo ' <li><a href="index.php?section=anfahrt">Anfahrt</a></li>';
	     echo ' <li><a href="index.php?section=preise">Preise</a></li>';
	     echo '<li id="active"><a href="index.php?section=buchungsanfrage" id="current">Buchen</a></li>';


	     echo ' <li><a href="index.php?section=kontakt">Kontakt</a></li>';

	}

	elseif($section == "kontakt")
	{
	     echo ' <li><a href="index.php?section=startseite">Startseite</a></li>';
	     echo ' <li><a href="index.php?section=wohnung">Wohnung</a></li>';
	     echo ' <li><a href="index.php?section=freizeit">Freizeit</a></li>';
	     echo ' <li><a href="index.php?section=anfahrt">Anfahrt</a></li>';
	     echo ' <li><a href="index.php?section=preise">Preise</a></li>';
	     echo ' <li><a href="index.php?section=buchungsanfrage">Buchen</a></li>';

	     echo '<li id="active"><a href="index.php?section=kontakt" id="current">Kontakt</a></li>';


	}

	else
	{

	     echo '<li id="active"><a href="index.php?section=startseite" id="current">Startseite</a></li>';

	     echo ' <li><a href="index.php?section=wohnung">Wohnung</a></li>';
	     echo ' <li><a href="index.php?section=freizeit">Freizeit</a></li>';
	     echo ' <li><a href="index.php?section=anfahrt">Anfahrt</a></li>';
	     echo ' <li><a href="index.php?section=preise">Preise</a></li>';
	     echo ' <li><a href="index.php?section=buchungsanfrage">Buchen</a></li>';
	     echo ' <li><a href="index.php?section=kontakt">Kontakt</a></li>';
	}

        ?>
    </ul>
  </div>

