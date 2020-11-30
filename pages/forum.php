<?php
	include_once "../class/User.php";
	include_once "../class/Comment.php";

	header('Access-Control-Allow-Origin: *');
        header('Access-Control-Max-Age: 86400');

	try
	{
		$pdo = new PDO('mysql:host=localhost;port=3306;dbname=progweb', "cours", "1810");
		// Je sais absolument ce que font ces deux lignes, pas besoin de poser de question dessus
		$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
	        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

		// TODO: S'assurer que les tables existent.

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
	                	if ($user->getId() == $comment['author'])
	                    		$userSelected = $user;

			$commentsObj[] = new Comment(
				$comment['text'],
				$userSelected
			);
	        }

		$json = json_encode($commentsObj, JSON_PARTIAL_OUTPUT_ON_ERROR);
		echo $json;
	}
	catch (Exception $e)
	{
		echo "Une erreur est survenue.";
	}
?>



<!-- Partie HTML pour rendre les commentaires. -->
<!-- <!DOCTYPE html>
<html lang="en" dir="ltr">
	<head>
		<meta charset="utf-8">
		<title>Titer</title>
	</head>
	<body>

		<h1>Titre</h1>

		<form action="new_message.php" method="post">

		</form>

		<main>
			< ?php foreach ($commentsObj as $comment) : ?>
				<article>
					<div>
						<img src="< ?= $comment->getAuthor()->getPpurl(); ?>" alt="image de profil d'un utilisateur">
						<h3> < ?= $comment->getAuthor()->getUsername(); ?> </h3>
					</div>
					<span> < ?= $comment->getText(); ?> </span>
				</article>
			< ?php endforeach; ?>
		</main>

	</body>
</html> -->
