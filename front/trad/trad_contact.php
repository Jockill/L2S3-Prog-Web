<?php

	$page_title = "Contact";
	if ($_COOKIE["lang"] == "fr" || !isset($_COOKIE["lang"]))
	{
		$nom = "Nom";
		$prenom = "Prénom";
		$mail = "Mail";
		$note = "Quelle note allez-vous mettre à ce devoir ?";
		$probablement = "Probablement";
		$certainement = "Certainement";
		$absoulement = "Absolument";
		$message = "Votre message";
		$envoyer = "envoyer";
		$button ="<li data-letters='[\"e\"]' data-initial=\"e\"></li>
		<li data-letters='[\"e\", \"n\"]' data-initial=\"n\"></li>
		<li data-letters='[\"e\", \"n\", \"v\"]' data-initial=\"v\"></li>
		<li data-letters='[\"e\", \"n\", \"v\", \"o\"]' data-initial=\"o\"></li>
		<li data-letters='[\"e\", \"n\", \"v\", \"o\", \"y\"]' data-initial=\"y\"></li>
		<li data-letters='[\"e\", \"n\", \"v\", \"o\", \"y\", \"e\"]' data-initial=\"e\"></li>
		<li data-letters='[\"e\", \"n\", \"v\", \"o\", \"y\", \"e\", \"r\"]' data-initial=\"r\"></li>";
	}
	else
	{
		$nom = "Last name";
		$prenom = "First name";
		$mail = "Mail";
		$note = "How will you mark this work ?";
		$probablement = "Probably";
		$certainement = "Certainly";
		$absoulement = "Absolutely";
		$message = "Your message";
		$envoyer = "send";
		$button ="<li data-letters='[\"s\"]' data-initial=\"s\"></li>
		<li data-letters='[\"s\", \"e\"]' data-initial=\"e\"></li>
		<li data-letters='[\"s\", \"e\", \"n\"]' data-initial=\"n\"></li>
		<li data-letters='[\"s\", \"e\", \"n\", \"d\"]' data-initial=\"d\"></li>";
	}

?>
