<?php

	if ($_COOKIE["lang"] == "fr" || !isset($_COOKIE["lang"]))
	{
		$accueil = "Accueil";
		$decouvrez = "Découvrez Nous";
	}
	else
	{
		$accueil = "Home";
		$decouvrez = "Discover Us";
	}
?>
