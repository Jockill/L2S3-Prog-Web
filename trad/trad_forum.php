<?php

	$page_title = "Forum";
	if ($_COOKIE["lang"] == "fr" || !isset($_COOKIE["lang"]))
	{
		$created = "Votre message a bien été envoyé.";
		$badData = "Merci de remplir les champs avant d'envoyer le formulaire.";
		$error = "Une erreur est survenue lors du contact de la base de donnée.";
		$delUsr = "Nom d'utilisateur modéré";
		$delCom = "Commentaire modéré";
		$plus = "Charger plus de messages";
		if (isset($_COOKIE['username']))
			$rep = "Répondre en tant que " . $_COOKIE['username'];
		else
			$rep = "Veuillez <a href='index.php'>vous identifier</a> pour répondre.";
		$altPP = "Votre image de profil";
		$noMore = "Plus de messages à charger. Ajoutez en un !";
		$forum_titre = "Titre";
		$envoyer = "Envoyer";
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
		$created = "Your comment has been sent.";
		$badData = "Please, do not send an empty message.";
		$error = "An error has occured";
		$delUsr = "Moderated username";
		$delCom = "Moderated comment";
		$plus = "Load more messages";
		if (isset($_COOKIE['username']))
			$rep = "Answer as " . $_COOKIE['username'];
		else
			$rep = "Please <a href='index.php'>log in</a> to answer";
		$altPP = "Your profile picture";
		$noMore = "No more messages to load. Add one !";
		$forum_titre = "Title";
		$envoyer = "Send";
		$button ="<li data-letters='[\"s\"]' data-initial=\"s\"></li>
		<li data-letters='[\"s\", \"e\"]' data-initial=\"e\"></li>
		<li data-letters='[\"s\", \"e\", \"n\"]' data-initial=\"n\"></li>
		<li data-letters='[\"s\", \"e\", \"n\", \"d\"]' data-initial=\"d\"></li>";
	}
?>
