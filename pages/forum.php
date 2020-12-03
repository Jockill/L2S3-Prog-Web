<?php
	include_once "../class/User.php";
	include_once "../class/Comment.php";

	header('Access-Control-Allow-Origin: *');
        header('Access-Control-Max-Age: 86400');

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
		$usersObj = [];
	        foreach ($users as $user)
		{
			if ($user['ppurl'] == null)
			{
				$usersObj[] = new User($user['id'], $user['username'], "rien");
			}
			else
			{
				$usersObj[] = new User($user['id'], $user['username'], $user['ppurl']);
			}
		}

		$comments = $pdo->query('SELECT * FROM comment')->fetchAll();

	        $commentsObj = [];
	        foreach ($comments as $comment)
		{
			$userSelected = null;

            		foreach ($usersObj as $user)
			{
				if ($user->getId() == $comment['author'])
				{
					$userSelected = $user;
				}
			}

			$commentsObj[] = new Comment(
					$comment['text'],
					$userSelected);
	        }

		// var_dump($commentsObj);
		$json = json_encode($commentsObj);
		// echo '<body>' . $json . '</body>';
		echo($json);
		// echo '{ "data": [{"text":"First!","author":{"id":"1","username":"lpb","ppurl":"rien"}}] }';

	}
	catch (Exception $e)
	{
		echo "Une erreur est survenue.";
	}
?>
