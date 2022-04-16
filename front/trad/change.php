<?php
	if (isset($_COOKIE["lang"]))
	{
		if ($_COOKIE["lang"] == "en")
		{
			setcookie("lang", "", time()-3600, "/");
			setcookie("lang", "fr", time()+60*60*24*30, "/");
		}
		else if ($_COOKIE["lang"] == "fr")
		{
			setcookie("lang", "", time()-3600, "/");
			setcookie("lang", "en", time()+60*60*24*30, "/");
		}
	}
	else
		setcookie("lang", "fr", time()+60*60*24*30, "/");

	//Pas incroyable niveau sécurité :(
	header("Location: " . $_SERVER["HTTP_REFERER"]);
?>
