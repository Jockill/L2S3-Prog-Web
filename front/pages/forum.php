<?php include_once "header.php" ?>
<?php include_once '../trad/trad_forum.php' ?>
<link rel="stylesheet" href="../css/glitch.css">
<link rel="stylesheet" href="../css/style_forum.css">

<main>
    <h1>FORUM</h1>

	<p>
		<?php
			if (isset($_GET["mod"]))
			{
				if ($_GET["mod"] == "created")
					echo $created;
				else if ($_GET["mod"] == "badData")
					echo $badData;
				else if ($_GET["mod"] == "error")
					echo $error;
			}
		?>
	</p>

    <div>
	    <article>
	        <div>
	            <img src="../ressources/faker.png" alt="Image de profil de faker">
	            <h3>Faker</h3>
	        </div>
	        <span>L33t.C4r3 always goes for the huge play the QSS.</span>
	    </article>
	    <article>
	        <div>
	            <img src="../ressources/del.jpg" alt=<?php echo $delUsr; ?>>
	            <h3> <?php echo $delUsr; ?></h3>
	        </div>
	        <span> <?php echo $delCom; ?> </span>
	    </article>
	    <article>
	        <div>
	            <img src="../ressources/kqly.png" alt="">
	            <h3>KQLY</h3>
	        </div>
	        <span>Merci pour le aim bot !</span>
	    </article>
    </div>

	<div id='ajaxxe'></div>
	<button id="more"> <?php echo $plus; ?> </button>

    <div>
        <h2> <?php echo $rep; ?> </h2>
	<img src="<?php echo $_COOKIE["ppurl"]; ?>" alt="<?php echo $altPP; ?>">

	<?php
		if (isset($_COOKIE["username"]))
		{
	?>
			<form action="http://localhost:8080/pages/new_message.php" method="post">
			<!-- On suppose que l'user est connecté, on récupère son cookie de session pour le nom et l'image. -->
			<!-- <label for="titre"> < ?php echo $forum_titre; ?> </label> -->
			<!-- <br> -->
			<!-- <input type="text" name ="titre" id="titre"> -->
			<!-- <br> -->

				<label for="message">Message</label>
				<br>
				<textarea name="message" id="message"></textarea>

				<!-- Courtesy code from csspoint101.com -->
				<div class="container">
					<button class="btn-split" type="submit">
						<div class="name"> <?php echo $envoyer; ?> </div>
							<div class="letters">
								<ul class="letters-list">
									<?php echo $button; ?>
								</ul>
							</div>
					</button>
				</div>
			<!-- My code again -->
		        </form>
	<?php
		}
	?>

    </div>

</main>

<script src="../script/glitch.js" charset="utf-8"></script>
<script src="../script/script_forum.js" charset="utf-8"></script>

<?php include "footer.php" ?>
