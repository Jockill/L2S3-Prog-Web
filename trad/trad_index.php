<?php

	if ($_COOKIE["lang"] == "fr" || !isset($_COOKIE["lang"]))
	{
		$bienvenue = "Bienvenue ";
		$userpassFalse = "Le nom d'utilisateur ou le mot de passe entré est incorrect.";
		$alreadyExists = "Ce nom d'utilisateur existe déja, merci d'en utiliser un autre.";
		$created = "Bienvenue parmi nous !";
		$badData = "Les champs n'ont pas été remplis correctement";
		$error = "Oups... Une erreur est survenue.";
		$uname = "Nom d'utilisateur";
		$pass = "Mot de passe";
		$pass2 = "Confirmez le mot de passe";
		$ppurl = "Entrez une URL pour votre photo de profil.";
		$laisseBlanc = "Laissez blanc pour l'image par défaut.";
		$conn = "Connexion";
		$deco = "Déconnexion";
		$nouv = "Créer un compte";
	}
	else
	{
		$bienvenue = "Welcome ";
		$userpassFalse = "You can't enter using false credentials.";
		$alreadyExists = "This username is already in use, please choose another one.";
		$created = "Welcome on board !";
		$badData = "Please enter correct inputs in the input fields.";
		$error = "Whoupsi... An error has occured.";
		$uname = "Username";
		$pass = "Password";
		$pass2 = "Confirm password";
		$ppurl = "Enter an URL to choose your profile picture.";
		$laisseBlanc = "Leave blank to get the default one.";
		$conn = "Connect";
		$deco = "Disconnect";
		$nouv = "New account";
	}
?>
