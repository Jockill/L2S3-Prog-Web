<?php

	if ($_COOKIE["lang"] == "fr" || !isset($_COOKIE["lang"]))
	{
		$abonement = "S'abonner";
		$mission = "Notre mission";
		$mission2 = "Nous nous battons chaque jour auprès des L33t pour subvenir à leurs besoins sanitaires, n'importe quand, n'importe où.";
		$lang = "Change language to ";
		$cookie = "Ce site utilise des cookies. Pour veiller à son bon fonctionnement, merci de les garder activés.";
	}
	else
	{
		$abonement = "Subscribe";
		$mission = "Our mission";
		$mission2 = "We're fighting every day with the L33T to provide with every single sanitary need.";
		$lang = "Changer la langue pour ";
		$cookie = "This website is using cookies. To ensure good behaviour, thanks to keep them enabled.";
	}
?>
