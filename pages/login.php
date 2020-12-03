<?php
	$username = htmlentities($_POST["username"]);
	$pass = htmlentities($_POST["pass"]);

	if ($username == "" || $pass == "")
	{
		header("Location: http://localhost:8000/pages/index.php?MOD=badData");
		exit;
	}


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

		$users = $pdo->query('SELECT * FROM user_data')->fetchAll();

		for ($i=0; $i<sizeof($users); $i++)
		{
			if ($username != $users[$i]["username"])
				continue;
			else if ($pass == $users[$i]["pass"])
			{
				// Mettre en place les cookies
				if ($users[$i]["ppurl"] == "")
					setcookie("ppurl", "../ressources/icon.png", time()+(3600*3), '/');
				else
					setcookie("ppurl", $users[$i]["ppurl"], time()+(3600*3), '/');
				setcookie("username", $username, time()+(3600*3), '/');
				setcookie("id", $users[$i]["id"], time()+(3600*3), '/');
				header("Location: http://localhost:8000/pages/index.php?mod=conn");
				exit;
			}
		}
	}
	catch (Exception $e) {
		header("Location: http://localhost:8000/pages/index.php?mod=error");
		exit;
	}


	header("Location: http://localhost:8000/pages/index.php?mod=userpassFalse");
?>
