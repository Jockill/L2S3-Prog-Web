<?php include_once "header.php" ?>
<?php include_once "../trad/trad_index.php"?>
<link rel="stylesheet" href="../css/style_index.css">

<main>
	<p role="log" aria-live="polite">
		<?php
			if (isset($_GET["mod"]))
			{
				if ($_GET["mod"] == "userpassFalse")
					echo $userpassFalse;
				else if ($_GET["mod"] == "alreadyExists")
					echo $alreadyExists;
				else if ($_GET["mod"] == "created")
					echo $created;
				else if ($_GET["mod"] == "badData")
					echo $badData;
				else if ($_GET["mod"] == "error")
					echo $error;
			}
		?>
	</p>
	<br/>
		<?php
			if (isset($_COOKIE["username"]))
			{
				echo "<p>" . $bienvenue . $_COOKIE["username"] . "!</p>";
		?>
				<form action="http://localhost:8080/pages/deconnexion.php" method="post">
					<button type="submit"><?php echo $deco; ?></button>
				</form>
		<?php
			}
			else
			{
		?>
				<form action="http://localhost:8080/pages/login.php" method="post">
					<fieldset>
						<legend>
							<button type="button" class="selected"><?php echo $conn; ?></button>
							<button type="button" class=""><?php echo $nouv; ?></button>
						</legend>

						<label for="username"><?php echo $uname; ?></label>
						<br/>
						<input type="text" name="username" id="username"/>
						<br/><br/>
						<label for="pass"><?php echo $pass; ?></label>
						<br/>
						<input type="password" name="pass" id="pass"/>
						<br/>
						<div>
							<br/>
							<label for="pass2"><?php echo $pass2; ?></label>
							<br/>
							<input type="password" name="pass2"/>
							<br/><br/>
							<label for="ppurl"><?php echo $ppurl; ?></label>
							<br/>
							<textarea name="ppurl" cols="30" rows="3" placeholder="<?php echo $laisseBlanc; ?>"></textarea>
						</div>
						<br/>
						<button type="submit" name="button">Go !</button>
					</fieldset>
				</form>
		<?php
			}
		?>



</main>

<script src="../script/script_index.js" charset="utf-8"></script>
<?php include "footer.php" ?>
