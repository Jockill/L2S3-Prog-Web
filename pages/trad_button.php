<form action="../trad/change.php" method="post">
	<button type="submit" id="trad">
		<?php
			if (!isset($_COOKIE["lang"]) || $_COOKIE["lang"] == "fr")
				echo "<img id='drapeau' src='../ressources/uk.jpg' />";
			else
				echo "<img id='drapeau' src='../ressources/france.png' />";
		?>
	</button>
</form>
