<?php
        if($section == "wohnung"){include("wohnung.php");}
        elseif($section == "freizeit"){include("freizeit.php");}
        elseif($section == "anfahrt"){include("anfahrt.php");}
        elseif($section == "preise"){include("preise.php");}
        elseif($section == "buchungsanfrage"){include("buchung.php");}
        elseif($section == "kontakt"){include("kontakt.php");}
        else{include("startseite.php");}

?>

