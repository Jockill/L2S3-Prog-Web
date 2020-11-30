<?php

	//Securisation
	$username = htmlentities($_POST["username"]);
	$pass = htmlentities($_POST["pass"]);


	if ($username != "" && $pass != "")
	{
		try
		{
			$pdo = new PDO('mysql:host=localhost;port=3306;dbname=progweb', "cours", "1810");
			// Je sais absolument ce que font ces deux lignes, pas besoin de poser de question dessus
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
					header("Location: http://localhost:8000/index.php&MOD=alreadyExists");
					$exist = true;
					break;
				}
			}

			if ($exist != true)
			{
				//On l'insere
				$statement = $pdo->prepare('INSERT INTO user_data (username, pass) VALUES (:username, :pass)');
				$statement->bindValue('username', $username);
				$statement->bindValue('pass', $pass);
				$statement->execute();

				//Redirige
				header("Location: http://localhost:8000/index.php&MOD=created");
			}

		}
		catch (Exception $e)
		{
			//Je sais pas encore faire ca
			echo ":@";
		}

	}
	else
	{
		header("Location: http://localhost:8000/index.php&MOD=falseData");
	}


?>
