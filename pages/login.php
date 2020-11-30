<?php
	$username = htmlentities($_POST["username"]);
	$pass = htmlentities($_POST["pass"]);

	$pdo = new PDO('mysql:host=localhost;port=3306;dbname=progweb', "cours", "1810");
	// Je sais absolument ce que font ces deux lignes, pas besoin de poser de question dessus
	$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


	$users = $pdo->query('SELECT * FROM user_data')->fetchAll();


	// echo json_encode($users);

	for ($i=0; $i<sizeof($users); $i++)
	{
		if ($username != $users[$i]["username"])
			continue;
		else if ($pass == $users[$i]["pass"])
		{
			// Mettre en place les cookies
			setcookie("ppurl", $test, time()+(3600*3), '/'); /*!*/
			setcookie("username", $username, time()+(3600*3), '/');
			header("Location: http://localhost:8000/pages/index.php?MOD=conn");
		}
		else
		{
			header("Location: http://localhost:8000/pages/index.php?MOD=userpassFalse");
		}
	}

?>
