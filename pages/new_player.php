<?php

	//Securisation
	$username = htmlentities($_POST["username"]);
	$pass = htmlentities($_POST["pass"]);
	$ppurl = htmlentities($_POST["ppurl"]);


	if ($username != "" && $pass != "" && $_POST["pass"] == $_POST["pass2"])
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

			$pdo->query('CREATE TABLE IF NOT EXISTS user_data (
				id SERIAL PRIMARY KEY,
				username VARCHAR(50) NOT NULL,
				pass VARCHAR(50) NOT NULL,
				ppurl TEXT)');

			//S'assurer que l'user n'existe pas deja.
			$users = $pdo->query('SELECT * FROM user_data')->fetchAll();
			for ($i=0; $i<sizeof($users); $i++)
			{
				if ($username === $users[$i]["username"])
				{
					//Renvoyer à la page, l'user existe déja.
					header("Location: http://localhost:8000/pages/index.php?mod=alreadyExists");
					$exist = true;
					exit;
				}
			}

			//On l'insere
			$statement = $pdo->prepare('INSERT INTO user_data (username, pass, ppurl) VALUES (:username, :pass, :ppurl)');
			$statement->bindValue('username', $username);
			$statement->bindValue('pass', $pass);
			$statement->bindValue('ppurl', $ppurl);
			$statement->execute();

			//Redirige
			header("Location: http://localhost:8000/pages/index.php?mod=created");
			exit;

		}
		catch (Exception $e)
		{
			header("Location: http://localhost:8000/pages/index.php?mod=error");
			exit;
		}

	}
	else
	{
		header("Location: http://localhost:8000/pages/index.php?mod=badData");
		exit;
	}


?>
