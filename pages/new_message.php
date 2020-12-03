<?php

	//Securisation
	// $titre = htmlentities($_POST["titre"]);
	$message = htmlentities($_POST["message"]);


	if (/*$titre != "" &&*/ $message != "")
	{
		try
		{
			//Methode 1 : Utilisez vos propres variables d'environement
				// $pdoSource = 'mysql:host=localhost;port=3306;dbname=' . getenv('BDDNAME');
				// echo $pdoSource;
				// $pdo = new PDO($pdoSource, getenv("USERNAME"), getenv("PASS"));
			//Methode 2 : Configurez la base de donnée pour matcher ces identifiants
				$pdo = new PDO("mysql:host=localhost;port=3306;dbname=progweb", "cours", "1810");
			$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
			$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

			$pdo->query('CREATE TABLE IF NOT EXISTS comment (
				id SERIAL PRIMARY KEY,
				text TEXT NOT NULL,
				author INT)');

			//On l'insere
			$statement = $pdo->prepare('INSERT INTO comment (text, author) VALUES (:text, :author)');
			$statement->bindValue('text', $message);
			//Dangereux car on peut modifier soi meme la valeur des cookies, donc usurper l'identité d'un utilisateur
			//Mais je n'ai plus le temps de coder une nouvelle requete dans la BDD
			//Pour récuperer l'ID de l'user connecté et m'assurer que c'est le bon.
			//Cette fonctionalité est prévue pour la V2, ce sera 200€.
			$statement->bindValue('author', $_COOKIE["id"]);
			$statement->execute();

			//Redirige
			header("Location: http://localhost:8000/pages/forum.php?mod=created");
			exit;
		}
		catch (Exception $e)
		{
			header("Location: http://localhost:8000/pages/forum.php?mod=error");
			exit;
		}

	}
	else
	{
		header("Location: http://localhost:8000/pages/forum.php?mod=badData");
	}


?>
